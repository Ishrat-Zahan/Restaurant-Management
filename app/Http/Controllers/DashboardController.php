<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use App\Models\Order;
use App\Models\off_order;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        // Today's Revenue
        $todayRevenue = off_order::whereDate('created_at', Carbon::today())
            ->where('active', '0')
            ->sum('total');

        // This Month's Revenue
        $monthlyRevenue = off_order::whereYear('created_at', Carbon::now()->year)
            ->whereMonth('created_at', Carbon::now()->month)
            ->where('active', '0')
            ->sum('total');

        // Total Orders
        $totalOrders = Order::count() + off_order::where('active', '0')->count();

        // Total Reservations
        $totalReservations = Reservation::count();

        // Total Menu Items
        $totalMenuItems = Menu::count();

        // Total Customers
        $totalCustomers = User::count();

        // Monthly Revenue Data (Last 6 months)
        $monthlyRevenueData = [];
        $monthLabels = [];
        for ($i = 5; $i >= 0; $i--) {
            $date = Carbon::now()->subMonths($i);
            $monthLabels[] = $date->format('M');
            $revenue = off_order::whereYear('created_at', $date->year)
                ->whereMonth('created_at', $date->month)
                ->where('active', '0')
                ->sum('total');
            $monthlyRevenueData[] = $revenue;
        }

        // Orders by Category
        $categoryData = Category::withCount('menus')->get();
        $categoryLabels = $categoryData->pluck('name')->toArray();
        $categoryCounts = $categoryData->pluck('menus_count')->toArray();

        // Reservations by Month (Last 6 months)
        $reservationData = [];
        for ($i = 5; $i >= 0; $i--) {
            $date = Carbon::now()->subMonths($i);
            $count = Reservation::whereYear('created_at', $date->year)
                ->whereMonth('created_at', $date->month)
                ->count();
            $reservationData[] = $count;
        }

        // Daily Orders (Last 7 days)
        $dailyOrderData = [];
        $dayLabels = [];
        for ($i = 6; $i >= 0; $i--) {
            $date = Carbon::now()->subDays($i);
            $dayLabels[] = $date->format('D');
            $count = off_order::whereDate('created_at', $date)
                ->where('active', '0')
                ->count();
            $dailyOrderData[] = $count;
        }

        // Recent Orders
        $recentOrders = off_order::with('tab')
            ->where('active', '0')
            ->latest()
            ->take(5)
            ->get();

        // Pending Orders
        $pendingOrders = off_order::where('active', '1')->count();

        return view('layout.content', [
            'todayRevenue' => $todayRevenue,
            'monthlyRevenue' => $monthlyRevenue,
            'totalOrders' => $totalOrders,
            'totalReservations' => $totalReservations,
            'totalMenuItems' => $totalMenuItems,
            'totalCustomers' => $totalCustomers,
            'monthLabels' => json_encode($monthLabels),
            'monthlyRevenueData' => json_encode($monthlyRevenueData),
            'categoryLabels' => json_encode($categoryLabels),
            'categoryCounts' => json_encode($categoryCounts),
            'reservationData' => json_encode($reservationData),
            'dayLabels' => json_encode($dayLabels),
            'dailyOrderData' => json_encode($dailyOrderData),
            'recentOrders' => $recentOrders,
            'pendingOrders' => $pendingOrders,
        ]);
    }

    public function search(Request $request)
    {
        $query = $request->get('q');
        
        if (empty($query)) {
            return response()->json(['results' => []]);
        }

        $results = [];

        // Search Menu Items
        $menus = Menu::where('name', 'LIKE', "%{$query}%")
            ->orWhere('details', 'LIKE', "%{$query}%")
            ->take(5)
            ->get();

        foreach ($menus as $menu) {
            $results[] = [
                'type' => 'menu',
                'title' => $menu->name,
                'subtitle' => '৳' . number_format($menu->price, 0),
                'url' => route('menu.edit', $menu->id),
                'icon' => 'utensils'
            ];
        }

        // Search Reservations
        $reservations = Reservation::with('user')
            ->whereHas('user', function($q) use ($query) {
                $q->where('name', 'LIKE', "%{$query}%")
                  ->orWhere('email', 'LIKE', "%{$query}%");
            })
            ->orWhere('date', 'LIKE', "%{$query}%")
            ->take(5)
            ->get();

        foreach ($reservations as $reservation) {
            $results[] = [
                'type' => 'reservation',
                'title' => $reservation->user->name ?? 'Guest',
                'subtitle' => 'Date: ' . $reservation->date . ' | ' . $reservation->person . ' guests',
                'url' => route('reservation.index'),
                'icon' => 'calendar-check'
            ];
        }

        // Search Orders
        $orders = Order::with('user')
            ->where('id', 'LIKE', "%{$query}%")
            ->orWhereHas('user', function($q) use ($query) {
                $q->where('name', 'LIKE', "%{$query}%");
            })
            ->take(5)
            ->get();

        foreach ($orders as $order) {
            $results[] = [
                'type' => 'order',
                'title' => 'Order #' . $order->id,
                'subtitle' => '৳' . number_format($order->total, 0) . ' | ' . ($order->user->name ?? 'Guest'),
                'url' => route('order.show', $order->id),
                'icon' => 'shopping-cart'
            ];
        }

        return response()->json(['results' => $results]);
    }
}
