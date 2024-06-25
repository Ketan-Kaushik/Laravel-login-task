<x-layout>
  <div><x-slot:heading>User Listing Page</x-slot:heading></div>
  
  <div>
    <div class="space-y-12">
      <div class="border-b border-grey-900/10 pb-12">
        <h2 class="text-base font-semibold leading-7 text-gray-900">User Profile</h2>

        <ul role="list" class="divide-y divide-gray-100">
          @foreach($users as $user)
            <li class="flex justify-between gap-x-6 py-5">
              <div class=" overflow-none flex min-w-0 gap-x-4">
                <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="https://media.istockphoto.com/id/499728904/photo/unknown-person-silhouette.jpg?s=612x612&w=is&k=20&c=Kc9zIAG4mEkV-1Mjfhe6KRaoTE7QtUPOfS5i3_hhmPo=" alt="">
                <div class="min-w-0 flex-auto">
                  <p class="text-sm font-semibold leading-6 text-gray-900">{{ $user->first_name }} {{ $user->last_name }}</p>
                  <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{ $user->email }}</p>
                </div>
              </div>
              <div class="vr"></div>
              <div class="overflow-none shrink-0 sm:flex sm:flex-col sm:items-end">
                <p class="text-sm leading-6 text-gray-900">{{$user->about}}</p>
                <p class="mt-1 text-xs leading-5 text-gray-500">Last updated at {{$user->updated_at}}.</p>
              </div>
              <div class="vr"></div>
              <div class="overflow-none ">
                <a href="{{route('edit',$user->id)}}">
                  <i class="fa-sharp fa-solid fa-pen-to-square"></i>
                </a>
                <a href="{{route('delete',$user->id)}}">
                  <i class="fa-solid fa-trash"></i>
                </a>
              </div>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</x-layout>
