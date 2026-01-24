@extends('layouts.main')
@section('content')
    <!-- cart page content -->
    <div class="cart-page-area">
        <div class="container">
            <!-- Form Start -->
            <form action="#">
                <!-- Table Content Start -->
                <div class="table-content table-responsive mb-50">
                    <table>
                        <thead>
                            <tr>
                                <th class="product-thumbnail">Image</th>
                                <th class="product-name">Product</th>
                                <th class="product-price">Price</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-subtotal">Total</th>
                                <th class="product-remove">Remove</th>
                            </tr>
                        </thead>
                        <tbody id="cart-table-body">
                            @forelse($cart as $id => $item)
                                <tr>
                                    <td class="product-thumbnail">
                                        <img src="{{ asset($item['image']) }}" width="80">
                                    </td>

                                    <td class="product-name">{{ $item['name'] }}</td>

                                    <td class="product-price">Rs {{ number_format($item['price'], 2) }}</td>

                                    <td class="product-quantity">
                                        <input type="number" min="1" value="{{ $item['quantity'] }}"
                                            class="cart-qty" data-id="{{ $id }}">
                                    </td>

                                    <td class="product-subtotal">
                                        Rs {{ number_format($item['price'] * $item['quantity'], 2) }}
                                    </td>

                                    <td class="product-remove">
                                        <a href="#" class="remove-cart" data-id="{{ $id }}">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">Cart is empty</td>
                                </tr>
                            @endforelse
                        </tbody>

                    </table>
                </div>
                <!-- Table Content Start -->
                <div class="row">
                    <!-- Cart Button Start -->
                    <div class="col-md-8 col-sm-7">
                        <div class="buttons-cart">
                            <input type="submit" value="Update Cart">
                            <a href="#">Continue Shopping</a>
                        </div>
                    </div>
                    <!-- Cart Button Start -->
                    <!-- Cart Totals Start -->
                    <div class="col-md-4 col-sm-5">
                        <div class="cart_totals">
                            <h2>Cart Totals</h2>
                            <table>
                                <tbody>
                                    <tr>
                                        <th>Subtotal</th>
                                        <td>
                                            <span class="amount" id="cart-subtotal">
                                                Rs {{ number_format($total, 2) }}
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Total</th>
                                        <td>
                                            <strong>
                                                <span class="amount" id="cart-total">
                                                    Rs {{ number_format($total, 2) }}
                                                </span>
                                            </strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="wc-proceed-to-checkout">
                                <a href="{{ route('checkout') }}">Proceed to Checkout</a>
                            </div>
                        </div>
                    </div>

                    <!-- Cart Totals End -->
                </div>
                <!-- Row End -->
            </form>
            <!-- Form End -->
        </div>
    </div>
    <!-- cart page content end -->
@endsection
@section('css')
    <style type="text/css">
        /*in page css here*/
    </style>
@endsection
@section('js')
    <script>
        $(document).on('change', '.cart-qty', function() {
            let id = $(this).data('id');
            let qty = $(this).val();
            let row = $(this).closest('tr');

            $.post('/cart/update', {
                _token: $('meta[name="csrf-token"]').attr('content'),
                id: id,
                quantity: qty
            }, function(res) {

                // update row subtotal
                row.find('.product-subtotal').text('Rs ' + res.item_total.toFixed(2));

                // update totals
                $('#cart-subtotal').text('Rs ' + res.cart_total.toFixed(2));
                $('#cart-total').text('Rs ' + res.cart_total.toFixed(2));
            });
        });

        $(document).on('click', '.remove-cart', function(e) {
            e.preventDefault();

            let id = $(this).data('id');
            let row = $(this).closest('tr');

            $.post('/cart/remove', {
                _token: $('meta[name="csrf-token"]').attr('content'),
                id: id
            }, function(res) {

                // remove row
                row.remove();

                // update totals
                $('#cart-subtotal').text('Rs ' + res.cart_total.toFixed(2));
                $('#cart-total').text('Rs ' + res.cart_total.toFixed(2));

                // if cart empty
                if (res.cart_count === 0) {
                    $('#cart-table-body').html(
                        '<tr><td colspan="6" class="text-center">Cart is empty</td></tr>'
                    );

                    // optional: disable checkout
                    $('.wc-proceed-to-checkout').hide();
                }
            });
        });
    </script>
@endsection
