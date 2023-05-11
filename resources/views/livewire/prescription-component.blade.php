<div>
    <!--main area-->
    <main id="main" class="main-site">
        <div class="container">
            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="/" class="link">home</a></li>
                    <li class="item-link"><span>Prescrip Upload</span></li>
                </ul>
            </div>

                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset -6">
                    <div class="wrap-login-item ">
                        <div class="login-form form-item form-stl" style="background-color: #40b0bf">
                            <form class="form-horizontal" wire:submit.prevent="saveData" enctype="multipart/form-data">
                                @csrf
                                <fieldset class="wrap-title">
                                    <h2>PRESCRIP UPLOAD</h2>
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <label for="name">Name:</label>
                                    <input type="Text" name="name" wire:model="name" placeholder="Enter your name..">
                                    @error('name')  <p class="text-danger">{{$message}}</p> @enderror
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <label for="email">Email:</label>
                                    <input type="email" name="email" wire:model="email" placeholder="Enter your email..">
                                    @error('email')  <p class="text-danger">{{$message}}</p> @enderror
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <label for="mobile">Mobile Number:</label>
                                    <input type="Text" name="mobile" wire:model="mobile" placeholder="Enter your mobile number..">
                                    @error('mobile')  <p class="text-danger">{{$message}}</p> @enderror
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <label for="whatsapp">Whatsapp Number:</label>
                                    <input type="Text" name="whatsapp" wire:model="whatsapp" placeholder="Enter your whatsapp number..">
                                    @error('whatsapp')  <p class="text-danger">{{$message}}</p> @enderror
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <label for="address">Delivery Address:</label>
                                    <input type="Text" name="address" wire:model="address" placeholder="Enter your address..">
                                    @error('address')  <p class="text-danger">{{$message}}</p> @enderror
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <label for="city">Nearest Main City:</label>
                                    <input type="Text" name="city" wire:model="city" placeholder="Enter your city..">
                                    @error('city')  <p class="text-danger">{{$message}}</p> @enderror
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <label for="image">Prescription Image:</label>
                                    <input type="file" name="image" wire:model="image">
                                    <br>
                                    @if($image)
                                        <img src="{{$image->temporaryUrl()}}" width="120" />
                                    @endif
                                    @error('image')  <p class="text-danger">{{$message}}</p> @enderror
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <label class="remember-field">
                                        <input class="checkbox" name="terms" id="active" type="checkbox" ><span>I agree to all terms and conditions</span>
                                    </label>
                                </fieldset>
                                <fieldset class="wrap-input">
                                <button class="btn btn-primary btn-lg btn-block" style="background-color: #132646" type="submit">Place Order</button>
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <br>
                                    @if(Session::has('message'))
                                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                    @endif
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset 6">
                    <div class="wrap-login-item ">
                        <div class="login-form form-item form-stl">
                            <x-jet-validation-errors class="mb-4" />
                            <form name="frm-login"method="POST" action="{{route('login')}}">
                                @csrf
                                <fieldset class="wrap-title">
                                    <h1>Already a customer?</h1>
                                    <h3 class="form-title">If you have an account with us, log in using your email address.</h3>
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <label for="frm-login-uname">Email Address:</label>
                                    <input type="email" id="frm-login-uname" name="email" placeholder="Type your email address":value="old('email')"required autofocus>
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <label for="frm-login-pass">Password:</label>
                                    <input type="password" id="frm-login-pass" name="password" placeholder="************"required autocomplete="current-password">
                                </fieldset>

                                <fieldset class="wrap-input">
                                    <label class="remember-field">
                                        <input class="frm-input " name="remember" id="rememberme" value="forever" type="checkbox"><span>Remember me</span>
                                    </label>
                                    <a class="link-function left-position" href="{route{('password.request')}}" title="Forgotten password?">Forgotten password?</a>
                                </fieldset>
                                <input type="submit" class="btn btn-submit" value="Login" name="submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
