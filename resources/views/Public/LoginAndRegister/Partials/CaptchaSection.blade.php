@if(config('maxticket.captcha.captcha_is_on') && config('maxticket.captcha.captcha_secret'))
<div class="form-group ">
    @if(config('maxticket.captcha.captcha_type') == 'recaptcha')
        @include('Public.LoginAndRegister.Partials.CaptchaRecaptcha')
    @endif
    @if(config('maxticket.captcha.captcha_type') == 'hcaptcha')
        @include('Public.LoginAndRegister.Partials.CaptchaHcaptcha')
    @endif
</div>
@endif
