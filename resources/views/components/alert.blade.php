<div>
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
    @if(session()->has('message'))
    <div style="padding:10px;background-color:green;">{{session()->get('message')}}</div>
    @endif
</div>