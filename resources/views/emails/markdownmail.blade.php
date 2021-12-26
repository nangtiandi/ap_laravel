@component('mail::message')
# Introduction

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa necessitatibus provident reprehenderit tempore! Aperiam commodi eum facilis id maiores nam natus nemo nesciunt nobis praesentium quidem quos, ratione saepe ut?
{{--##{{\App\Models\Category::all()}}--}}
@component('mail::button', ['url' => 'https://www.facebook.com/'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

