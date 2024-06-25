
<!DOCTYPE html>
<html class="h-full bg-white" lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://kit.fontawesome.com/7e480dc41f.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
</head>
<body style="background-image: url(https://tailwindui.com/img/beams-cover@95.jpg)" class="h-full">

  <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
      <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign in to your account</h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" id="login_form" action="/login" method="POST">
        @csrf
        <div>
          <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
          <div class="mt-2">
            <input id="email" name="email" type="email" autocomplete="email" value="{{old('email')}}" class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            @error('email')
              <div class="p-1 text-red-700 text-sm error">
                <i class="text-red-700 fa-solid fa-circle-info"></i> {{ $message }}</div>
            @enderror
          </div>
        </div>

        <div>
          <div class="flex items-center justify-between">
            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
            <div class="text-sm">
              <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</a>
            </div>
          </div>
          <div class="mt-2">
            <input id="password" name="password" type="password" autocomplete="current-password" class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
          @error('password')
            <div class=" p-1 text-red-700 text-sm error">
              <i class="text-red-700 fa-solid fa-circle-info"></i> {{ $message }}
            </div>
          @enderror
        </div>
        <div>
          <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
        </div>
        <p class="mt-10 text-center text-sm text-gray-500">
          OR
        </p>
        <div class="flex items-center justify-between">
          <button  type="button" class="btn btn-floating mx-1 rounded-full hover:shadow-xl">
            <i class="fa-brands fa-github scale-150"></i>
          </button>
          <div class="vr"></div>
          <button  type="button" class="btn btn-floating mx-1 rounded-full hover:shadow-xl">
            <i class="fa-brands fa-google scale-150"></i>
          </button>
          <div class="vr"></div>
          <button  type="button" class="btn btn-floating mx-1 rounded-full hover:shadow-xl">
            <i class="fa-brands fa-x-twitter scale-150"></i>
          </button>
          <div class="vr"></div>
          <button  type="button" class="btn btn-floating mx-1 rounded-full hover:shadow-xl">
            <i class="fa-brands fa-facebook scale-150"></i>
          </button>
        </div>
        
      </form>
      
      <p class="mt-10 text-center text-sm text-gray-500">
        Not a member?
        <a href="/register" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Sign UP</a>
      </p>
    </div>
  </div>
  
  <script src="{{asset('assets/js/formValidation.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>