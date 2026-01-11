@extends('layout.erp.app')
@section('style')
<style>
    body {
        margin-top: 20px;
        color: #484b51;
    }

    .text-secondary-d1 {
        color: #198754 !important;
    }

    .page-header {
        margin: 0 0 1rem;
        padding-bottom: 1rem;
        padding-top: .5rem;
        border-bottom: 1px dotted #e2e2e2;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -ms-flex-align: center;
        align-items: center;
    }

    .page-title {
        padding: 0;
        margin: 0;
        font-size: 1.75rem;
        font-weight: 300;
    }

    .brc-default-l1 {
        border-color: #dce9f0 !important;
    }

    .ml-n1,
    .mx-n1 {
        margin-left: -.25rem !important;
    }

    .mr-n1,
    .mx-n1 {
        margin-right: -.25rem !important;
    }

    .mb-4,
    .my-4 {
        margin-bottom: 1.5rem !important;
    }

    hr {
        margin-top: 1rem;
        margin-bottom: 1rem;
        border: 0;
        border-top: 1px solid rgba(0, 0, 0, .1);
    }

    .text-grey-m2 {
        color: #888a8d !important;
    }

    .text-success-m2 {
        color: #86bd68 !important;
    }

    .font-bolder,
    .text-600 {
        font-weight: 600 !important;

    }

    .text-110 {
        font-size: 110% !important;
    }

    .text-blue {
        color: #478fcc !important;
    }

    .pb-25,
    .py-25 {
        padding-bottom: .75rem !important;
    }

    .pt-25,
    .py-25 {
        padding-top: .75rem !important;
    }

    .bgc-default-tp1 {
        background-color: rgba(121, 169, 197, .92) !important;
    }

    .bgc-default-l4,
    .bgc-h-default-l4:hover {
        background-color: #f3f8fa !important;
    }

    .page-header .page-tools {
        -ms-flex-item-align: end;
        align-self: flex-end;
    }

    .btn-light {
        color: #757984;
        background-color: #f5f6f9;
        border-color: #dddfe4;
    }

    .w-2 {
        width: 1rem;
    }

    .text-120 {
        font-size: 120% !important;
    }

    .text-primary-m1 {
        color: #198754 !important;
    }

    .text-danger-m1 {
        color: #dd4949 !important;
    }

    .text-blue-m2 {
        color: #198754 !important;
    }

    .text-150 {
        font-size: 150% !important;
    }

    .text-60 {
        font-size: 60% !important;
    }

    .text-grey-m1 {
        color: #7b7d81 !important;
    }

    .align-bottom {
        vertical-align: bottom !important;
    }

    .custom-swal-container {
        display: flex;
        justify-content: center;
        align-items: flex-start;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);

    }

    .input-icons {
        position: relative;
        display: inline-block;
    }


    .input-icons i {
        position: absolute;
        padding: 10px;
        pointer-events: none;
    }


    .input-field {
        padding-left: 35px;
    }
</style>


@endsection

@section('page')


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

<div class="page-content container">
    <div class="page-header text-blue-d2">
        <h1 class="page-title text-secondary-d1">
            <small class="page-info">
                <i class="fa fa-angle-double-right text-80"></i>
                Create An Order
                <i class="fa fa-angle-double-right text-80"></i>
            </small>
        </h1>

        <div class="page-tools">
            <div class="action-buttons">
                <a class="btn bg-white btn-light mx-1px text-95" href="#" data-title="Print" onclick="printPage()">
                    <i class="mr-1 fa fa-print text-success-m1 text-120 w-2"></i>
                    Print
                </a>
                <a class="btn bg-white btn-light mx-1px text-95" href="#" data-title="PDF">
                    <i class="mr-1 fa fa-file-pdf-o text-danger-m1 text-120 w-2"></i>
                    Export
                </a>
            </div>
        </div>
    </div>

    <div class="container px-0">
        <div class="row mt-4">
            <div class="col-12 col-lg-12">
                <!-- <div class="row">
                    <div class="col-12">
                        <div class="text-center text-150">
                            <i class="fa fa-book fa-2x text-success-m2 mr-1"></i>
                            <span class="text-default-d3">Bootdey.com</span>
                        </div>
                    </div>
                </div> -->
                <!-- .row -->

                <!-- <hr class="row brc-default-l1 mx-n1 mb-4" /> -->

                <div class="row">
                    <div class="col-sm-6">
                        <div>
                            <span class="text-sm text-grey-m2 align-middle">From:</span>
                            <span style="color: #198754;" class="text-600 text-110  align-middle">IZ Food</span>
                        </div>
                        <div class="text-grey-m2">
                            <div class="my-1">
                                Section 06, Mirpur
                            </div>
                            <div class="my-1">
                                Dhaka
                            </div>
                            <div class="my-1"><i class="fa fa-phone fa-flip-horizontal text-secondary"></i> <b class="text-600">01799217813</b></div>
                        </div>
                    </div>
                    <!-- /.col -->

                    <div class="text-95 col-sm-6 align-self-start d-sm-flex justify-content-end">
                        <hr class="d-sm-none" />
                        <div class="text-grey-m2">


                            <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">ID:</span> #111-222</div>

                            <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">Issue Date:</span> Oct 12, 2019</div>


                        </div>
                    </div>
                    <!-- /.col -->
                </div>

                <div class="mt-4">
                    <!-- <div class="row text-600 text-white bgc-default-tp1 py-25">
                        <div class="d-none d-sm-block col-1">#</div>
                        <div class="col-9 col-sm-5">Description</div>
                        <div class="d-none d-sm-block col-4 col-sm-2">Qty</div>
                        <div class="d-none d-sm-block col-sm-2">Unit Price</div>
                        <div class="col-2">Amount</div>
                    </div>

                    <div class="text-95 text-secondary-d3">
                        <div class="row mb-2 mb-sm-0 py-25">
                            <div class="d-none d-sm-block col-1">1</div>
                            <div class="col-9 col-sm-5">Domain registration</div>
                            <div class="d-none d-sm-block col-2">2</div>
                            <div class="d-none d-sm-block col-2 text-95">$10</div>
                            <div class="col-2 text-secondary-d2">$20</div>
                        </div>

                        <div class="row mb-2 mb-sm-0 py-25 bgc-default-l4">
                            <div class="d-none d-sm-block col-1">2</div>
                            <div class="col-9 col-sm-5">Web hosting</div>
                            <div class="d-none d-sm-block col-2">1</div>
                            <div class="d-none d-sm-block col-2 text-95">$15</div>
                            <div class="col-2 text-secondary-d2">$15</div>
                        </div>

                        <div class="row mb-2 mb-sm-0 py-25">
                            <div class="d-none d-sm-block col-1">3</div>
                            <div class="col-9 col-sm-5">Software development</div>
                            <div class="d-none d-sm-block col-2">--</div>
                            <div class="d-none d-sm-block col-2 text-95">$1,000</div>
                            <div class="col-2 text-secondary-d2">$1,000</div>
                        </div>

                        <div class="row mb-2 mb-sm-0 py-25 bgc-default-l4">
                            <div class="d-none d-sm-block col-1">4</div>
                            <div class="col-9 col-sm-5">Consulting</div>
                            <div class="d-none d-sm-block col-2">1 Year</div>
                            <div class="d-none d-sm-block col-2 text-95">$500</div>
                            <div class="col-2 text-secondary-d2">$500</div>
                        </div>
                    </div>

                    <div class="row border-b-2 brc-default-l2"></div> -->

                    <!-- or use a table instead -->

                    <div class="table-responsive">
                        <table class="table  table-striped table-borderless border-0 border-b-2 brc-default-l1">
                            <thead style="background-color: #198754;" class="">
                                <tr class="text-white">
                                    <th class="opacity-2">#</th>

                                    <th>Items</th>
                                    <th>Qty</th>
                                    <th>Price</th>
                                    <th>Subtotal</th>
                                    <th>Action</th>

                                </tr>
                            </thead>


                            <div style="width: 100%;" class="d-flex justify-content-between">
                                {{-- <div>
                                    <input id="menusearch" placeholder="Search Menu" class="mb-4 w-100 form-control" type="text">

                                </div> --}}

                                <div class="input-icons mb-2">
                                    <i class='fa-solid fa-magnifying-glass'></i>
                                    <input placeholder="  Search Menu" type="search" id="menusearch" class="form-control input-field" required>

                                </div>
                                <div>
                                    <select id="tab_id" class="form-select" name="table_id" id="">
                                        <option value="-1">Select Table</option>

                                        @forelse ($tab as $row)

                                        <option value="{{ $row->id }}">{{ $row->name }}</option>
                                        @empty

                                        @endforelse
                                    </select>

                                </div>



                            </div>

                            <tbody id="dyn_tr" class="text-95 text-secondary-d3">

                            </tbody>
                        </table>
                    </div>


                    <div class="row mt-3">
                        <div class="col-12 col-sm-7 text-grey-d2 text-95 mt-2 mt-lg-0">

                        </div>

                        <div class="col-12 col-sm-5 text-grey text-90 order-first order-sm-last">



                            <div class="row my-2 align-items-center bgc-primary-l3 p-2">
                                <div class="col-7 text-right">
                                    Total Amount
                                </div>
                                <div class="col-5">
                                    <!-- <input class="grandtotal text-150 text-success-d3 opacity-2 form-control" type="text" name="total"> -->
                                    <span name="total" class="grandtotal text-150 text-success-d3 opacity-2"></span>
                                </div>
                            </div>
                        </div>
                    </div>



                    <hr />

                    <div style="margin-bottom: 100px;" class="d-flex justify-content-between">
                        <span class="text-secondary-d1 text-105">Thank you for Choosing us</span>
                        <!-- <input name="createOrder" class="btn btn-success btn-bold px-4 float-right mt-3 mt-lg-0" type="submit" value='Create Order'> -->


                        <a id="orderBtn" href="#" class="btn-primary-custom btn-bold px-4 float-right mt-3 mt-lg-0">Proceed Order</a>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('script')

<script>

function printPage() {
        window.print();
    }


    function financial(x) {
        return Number.parseFloat(x).toFixed(2);
    }

    $("#menusearch").autocomplete({
        source: "{{url('psearch')}}",
        minLength: 1,
        select: function(event, ui) {
            // console.log(ui)

            var html = "";
            html += "<tr>";
            html += "<td class='menu_id'>" + ui.item.id + "</td>";
            html += "<td>" + ui.item.name + "</td>";
            html += "<td><input value='1' class='qu w-25 form-control' type='number'></td>";
            html += "<td class='price'>" + ui.item.price + "</td>";
            html += "<td class='itemtotal'>" + ui.item.price + "</td>";

            html += '<td><a href="#" class="deleteproduct btn btn-success" data-id="' + ui.item.id + '"><i class="fa-solid fa-trash"></i></a></td>';

            html += "</tr>";

            $('#dyn_tr').append(html);
            $("#menusearch").val("").focus();
            updateTotal();
        }

    });

    $(document).on('click', '.deleteproduct', function(e) {
        e.preventDefault();
        $(this).closest('tr').remove();
    });

    $(document).on('blur change keyup', '.qu', function() {
        var $row = $(this).closest('tr');

        var qty = $row.find('.qu').val();
        var price = $row.find('.price').text();
        var itemtotal = qty * price;

        // console.log(itemtotal);

        $row.find('.itemtotal').text(financial(itemtotal));
        updateTotal();
    });

    function updateTotal() {

        var grandtotal = 0;
        $('.itemtotal').each(function() {
            grandtotal += parseFloat($(this).text());
        });

        $('.grandtotal').text(grandtotal);
    }


    $(document).on('click', '#orderBtn', function() {
        // alert('Order')

        var tab_id = $('#tab_id').val();
        // alert(tab_id);

        var order = [];
        $('.menu_id').each(function() {
            var menu_id = $(this).text();
            var qty = $(this).closest('tr').find('.qu').val();
            order.push({
                menu_id: menu_id,
                qty: qty
            });
        });

        $.ajax({
            url: "{{route('off_order.store')}}",
            type: 'post',
            data: {
                orders: order,
                tab_id: tab_id,
                grandtotal: $('.grandtotal').text(),

            },
            success: function(response) {
                console.log(response);
                // alert(response.message);
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: response.message,
                    showConfirmButton: false,
                    timer: 1500,
                    customClass: {
                        container: 'custom-swal-container',
                    },
                });

            }
        });


    })
</script>
@endsection