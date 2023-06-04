<div>
    <div class="row">
        <div class="col-md-3">
            @if ($category->brands)

            <div class="card">
            <div class="card-header"><h4>Brandlar</h4></div>
                <div class="card-body">
                    @foreach ($category->brands as $brandItem)
                    <label class="d-block">
                        <input type="checkbox" wire:model="brandInputs" value="{{ $brandItem->name }}" /> {{ $brandItem->name }}
                    </label>
                    @endforeach
                </div>
            </div>
            @endif

            <div class="card mt-3">
            <div class="card-header"><h4>Narxi</h4></div>
                <div class="card-body">
                    <label class="d-block">
                        <input type="radio" name="priceSort" wire:model="priceInput" value="high-to-low" />Baland narxdan past narxgacha
                    </label>
                    <label class="d-block">
                        <input type="radio" name="priceSort" wire:model="priceInput" value="low-to-high" /> Past narxdan baland narxgacha
                    </label>
                </div>
            </div>

        </div>
        <div class="col-md-9">

            <div class="row mt-3">
            @forelse ($products as $productItem)
                        
                
                    <div class="col-md-4">
                            <div class="product-card">
                                <div class="product-card-img">
                                    @if ($productItem->quantity > 0)
                                    <label class="stock bg-success">In Stock</label>
                                    @else
                                    <label class="stock bg-danger">Out of Stock</label>
                                    @endif
                                    
                                    @if ($productItem->productImages->count() > 0)
                                    <a href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug) }}">
                                    <img src="{{ asset($productItem->productImages[0]->image) }}" alt="{{ $productItem->name }}" class="category-thumbnail2" style="height:100%">
                                    </a> 
                                    @endif
                                
                                </div>
                                <div class="product-card-body">
                                    <p class="product-brand">{{ $productItem->brand }}</p>
                                    <h5 class="product-name">
                                    <a href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug) }}">
                                            {{ $productItem->name }} 
                                    </a>
                                    </h5>
                                    <div>
                                        <span class="selling-price">{{ number_format($productItem->selling_price) }} UZS</span>
                                        <span class="original-price"> {{ number_format($productItem->original_price) }} UZS</span>
                                    </div>
                                
                                </div>
                            </div>
                    </div>
                @empty
                <div class="col-md-12">
                    <h5>Mahsulotlar mavjud emas {{ $category->name }}</h5>
                </div>
                @endforelse
            </div>
        </div>
    </div>
</div>