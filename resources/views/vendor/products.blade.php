@extends('../layouts.app')

@section('content')
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<div class="login-form"><!--login form-->
						<h2> Add your Products</h2>
                        <form method="POST" action="/products/store">
                            @csrf
                            <input type="text" placeholder="Product Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <input type="text" placeholder="Web ID" class="form-control @error('web_id') is-invalid @enderror" name="web_id" value="{{ old('web_id') }}" required autocomplete="web_id" autofocus>

                            @error('web_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <input type="text" placeholder="Amount" class="form-control @error('amount') is-invalid @enderror" name="amount" value="{{ old('amount') }}" required autocomplete="amount" autofocus>

                            @error('amount')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <input type="text" placeholder="Quantity" class="form-control @error('quantity') is-invalid @enderror" name="quantity" value="{{ old('quantity') }}" required autocomplete="quantity" autofocus>

                            @error('quantity')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <input type="text" placeholder="Availability" class="form-control @error('available') is-invalid @enderror" name="available" value="{{ old('available') }}" required autocomplete="available" autofocus>

                            @error('available')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <input type="text" placeholder="Condition" class="form-control @error('condition') is-invalid @enderror" name="condition" value="{{ old('condition') }}" required autocomplete="condition" autofocus>

                            @error('condition')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <input type="text" placeholder="Brand" class="form-control @error('brand') is-invalid @enderror" name="brand" value="{{ old('brand') }}" required autocomplete="brand" autofocus>

                            @error('brand')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror


							<button type="submit" class="btn btn-default"> Add Products</button>
						</form>
					</div><!--/login form-->
				</div>
            </div>
        </div>
	</section><!--/form-->
@endsection
