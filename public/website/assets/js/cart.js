class Cart {
    constructor() {
      this.items = JSON.parse(localStorage.getItem('cart')) || [];
      this.total = JSON.parse(localStorage.getItem('carttotal')) || 0;
    }
  
    addItem(item, qty = 1) {
      // Check if item already exists in cart
      const existingItemIndex = this.items.findIndex(i => i.id === item.id);
      
      if (existingItemIndex > -1) {
        // Item exists, increase quantity
        this.items[existingItemIndex].quantity += qty;
      } else {
        // New item, set quantity and add to cart
        item.quantity = qty;
        this.items.push(item);
      }
      this.updateStorage();
    }
    
    // Add item with specific quantity (for single page)
    addItemWithQty(item, qty) {
      const existingItemIndex = this.items.findIndex(i => i.id === item.id);
      
      if (existingItemIndex > -1) {
        // Item exists, increase quantity
        this.items[existingItemIndex].quantity += qty;
      } else {
        // New item
        item.quantity = qty;
        this.items.push(item);
      }
      this.updateStorage();
    }
    
    // Check if item exists in cart
    itemExists(itemId) {
      return this.items.some(i => i.id === itemId);
    }
    
    // Get item quantity
    getItemQty(itemId) {
      const item = this.items.find(i => i.id === itemId);
      return item ? item.quantity : 0;
    }
  
    removeItem(item) {
        this.items = this.items.filter(e => e.id != item);
        this.updateStorage();
    }
    
    // Decrease item quantity or remove if qty becomes 0
    decreaseQty(itemId) {
      const existingItemIndex = this.items.findIndex(i => i.id === itemId);
      
      if (existingItemIndex > -1) {
        this.items[existingItemIndex].quantity -= 1;
        
        if (this.items[existingItemIndex].quantity <= 0) {
          this.items.splice(existingItemIndex, 1);
        }
      }
      this.updateStorage();
    }
  
    updateStorage() {
      localStorage.setItem('cart', JSON.stringify(this.items));
    }
  
    getTotal() {
      return this.items.reduce((total, item) => total + (item.price * item.quantity), 0);
    }
    
    totalItems() {
      // Return total quantity of all items
      return this.items.reduce((total, item) => total + item.quantity, 0);
    }
    
    // Get unique item count
    uniqueItemCount() {
      return this.items.length;
    }
    
    getItems() {
        return this.items;
    }
    
    emptyCart() {
      this.items = [];
      localStorage.removeItem('cart');
    }
  }