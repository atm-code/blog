<div class="container mx-auto js-cookie-consent cookie-consent text-center m-4 text-2xl rounded-xl sm:rounded-full mb-20 shadow italic p-3 border-2 border-gray-800 transition duration-700 ease-in-out">
    <span class="cookie-consent__message">
        {!! trans('cookieConsent::texts.message') !!}
    </span>

    <button class="js-cookie-consent-agree cookie-consent__agree text-green-700">
        {{ trans('cookieConsent::texts.agree') }}
    </button>

</div>
