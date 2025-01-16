<x-layout>
    <x-slot:layoutTitle>{{ $pageTitle }}</x-slot:layoutTitle>
    <x-slot:headTitle>Checkout</x-slot:headTitle>

    <h1 class="text-3xl p-5 text-center font-bold">CHECKOUT</h1>
    <form action="{{ route('checkout.save') }}" method="POST">
        @csrf
        <input type="hidden" name="menu_id" value="{{ $menu->id }}">
    
        <div class="flex space-x-4 mt-5 px-5">
            <div class="flex w-2/3 h-max border border-black rounded-xl">
                <div class="p-8">
                    <h1 class="font-bold">Shipment to:</h1>
                    <p>{{ $customer->name }}</p>
                    <input type="hidden" name="name" value="{{ $customer->name }}">
    
                    <h1 class="font-bold">Shipment Address:</h1>
                    <p>{!! nl2br(e($customer->address)) !!}</p>
                    <input type="hidden" name="address" value="{{ $customer->address }}">
    
                    <h1 class="font-bold">Phone Number:</h1>
                    <p>{{ $customer->phone }}</p>
                    <input type="hidden" name="phone" value="{{ $customer->phone }}">
    
                    <h1 class="font-bold">Package:</h1>
                    <div class="flex items-center space-x-4">
                        <input type="number" id="amount" name="amount" min="1" value="1"
                            class="w-16 p-2 border rounded-md text-center" onchange="updatePrice()">
                        <p>{{ $menu->name }}</p>
                        <input type="hidden" name="menu_name" value="{{ $menu->name }}">
                    </div>
                </div>
    
                <div class="p-8">
                    <h1 class="font-bold">Subscription Start:</h1>
                    <input type="date" name="start_date" value="{{ old('start_date', $startDate) }}"
                        class="border rounded px-4 py-2 mb-5 focus:outline-none focus:ring-2 focus:ring-yellow-600">
    
                    <h1 class="font-bold">Subscription End:</h1>
                    <input type="hidden" name="end_date" value="{{ old('end_date', $endDate) }}">
                    <p id="endDate">{{ $endDate }}</p>
    
                    <h1 class="font-bold pb-3">Notes:</h1>
                    <textarea name="notes"
                        class="w-max h-max border border-black rounded-lg p-3 text-black focus:outline-none focus:ring-2 focus:ring-yellow-600"
                        placeholder="Add your notes here...">{{ old('notes') }}</textarea>
                </div>
            </div>
    
            <div class="w-1/3 h-max border border-black p-8 rounded-xl">
                <h1 class="font-bold mb-3">Summary</h1>
                <div class="flex justify-between">
                    <div class="text-left">
                        <p>Sub-total</p>
                        <p>Shipping</p>
                        <h1 class="font-bold my-3">TOTAL</h1>
                    </div>
    
                    <div class="text-right">
                        <p>Rp{{ number_format($menu->price / 30, 0, ',', '.') }}</p>
                        <p>Free</p>
                        <h1 class="font-bold my-3" id="totalPrice">Rp{{ number_format($menu->price, 0, ',', '.') }}</h1>
                    </div>
                </div>
    
                <h1 class="font-bold mt-5 mb-2">Select payment method:</h1>
                <select name="payment_method" id="payment_method"
                    class="border rounded px-4 py-2 mb-5 focus:outline-none focus:ring-2 focus:ring-yellow-600">
                    <option value="" disabled selected>-- Select --</option>
                    <option value="linkaja">LinkAja</option>
                    <option value="ovo">OVO</option>
                    <option value="paypal">PayPal</option>
                    <option value="bank_transfer">Bank Transfer</option>
                </select>
    
                <div class="bg-[#E9A05E] bottom-0 inset-0 p-3 flex justify-center items-center rounded-2xl mx-auto">
                    <button type="submit" class="font-bold">Confirm Order</button>
                </div>
            </div>
        </div>
    </form>    
</x-layout>
