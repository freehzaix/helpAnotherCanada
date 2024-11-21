@extends('layout')

@section('titlePage')
    Page de paiement
@endsection

@section('extra-script')
    <script src="https://js.stripe.com/v3"></script>
@endsection

@section('contentPage')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h2>Page de paiement</h2>
                        <h4>Tarif du webinaire : ${{ $intent->amount }}</h4>

                        <form id="payment-form">
                            <div id="payment-element">
                                <!-- Elements will create form elements here -->
                            </div>
                            <button id="submit" type="submit" class="btn btn-primary btn-user btn-block mt-3">Procéder au
                                paiement</button>
                            <div id="error-message">
                                <!-- Display error message to your customers here -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection

@section('extra-js')
    <script>
        // Set your publishable key: remember to change this to your live publishable key in production
        // See your keys here: https://dashboard.stripe.com/apikeys
        const stripe = Stripe(
            'pk_test_51KdcJ5CCemCCFgwR60JzwAtjtva7Bj5fgQnPvL2IZsIVTgZJ2kEPHVV06STElisNvMJQ1i8GE9mkQALvF4Q2c09000xP3KVmfR'
        );
        const options = {
            clientSecret: '{{ $clientSecret }}',
            // Fully customizable with appearance API.
            appearance: {
                /*...*/
            },
        };

        // Set up Stripe.js and Elements to use in checkout form, passing the client secret obtained in a previous step
        const elements = stripe.elements(options);

        // Create and mount the Payment Element
        const paymentElement = elements.create('payment');
        paymentElement.mount('#payment-element');
    </script>
@endsection
