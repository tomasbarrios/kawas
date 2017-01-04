@foreach ($coffeeOrigins->chunk(4) as $items)
    <div class="row">
        @foreach ($items as $coffeeOrigin)
            <div class="col-md-3">
                 // html to render a coffeeOrigin
             </div> <!-- end col-md-3 -->
         @endforeach
    </div> <!-- end row -->
@endforeach