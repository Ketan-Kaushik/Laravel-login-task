<x-layout>
  <div><x-slot:heading>Profile Page</x-slot:heading></div>
  @guest
    Sign In to view your profile
  @endguest

  @auth
    @php
      $userSessionId = Auth::id();
      $userSessionEmail = Auth::user()->email;
      $userSessionFirstname = Auth::user()->first_name;
      $userSessionlastname = Auth::user()->last_name;

      echo $userSessionId;
      echo $userSessionEmail;
      echo $userSessionFirstname;
      echo $userSessionlastname;
    @endphp
  @endauth
</x-layout>