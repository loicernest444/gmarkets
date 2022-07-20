<style>
    @media (max-device-width: 494px)
    {
        .display-product-mobile  { 
            width: 200px;
            margin: 4px
        }
        .center-product-mobile{
            justify-content: center
        } 
    }

</style>

@if (get_setting('best_selling') == 1)
    <section class="mb-4">
        <div class="container">
            <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded">
                <div class="d-flex mb-3 align-items-baseline border-bottom">
                    <h3 class="h5 fw-700 mb-0">
                        <span class="border-bottom border-primary border-width-2 pb-3 d-inline-block">{{ translate('Best Selling') }}</span>
                    </h3>
                    <a href="javascript:void(0)" class="ml-auto mr-0 btn btn-primary btn-sm shadow-md">{{ translate('Top 30') }}</a>
                </div>
                <div class="gutters-10 d-flex flex-wrap justify-content center-product-mobile" data-items="6" data-xl-items="4" data-lg-items="4"  data-md-items="4" data-sm-items="4" data-xs-items="4" data-arrows='true' data-infinite='true'>
                    @foreach (filter_products(\App\Product::where('published', 1)->orderBy('num_of_sale', 'desc'))->limit(30)->get() as $key => $product)
                        <div class="display-product-mobile px-md-2 " >
                            @include('frontend.partials.product_box_1',['product' => $product])
                        </div> 
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endif
