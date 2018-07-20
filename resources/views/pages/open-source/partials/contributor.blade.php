<div class="flex items-center my-6">
    <div class="avatar">
        <img src="{{ $contributor->avatar_url }}">
    </div>
    <div class="ml-4">
        <h3 class="title-sm">
            {{ $contributor->name }} <i class="far fa-award text-pink"></i>
        </h3>
        <p class="text-xs text-grey mt-2 links-underline links-grey">
            Thank you <a class="" href="https://github.com/{{ $contributor->username }}">{{ $contributor->styled_username }}</a> <br>for your help on <a class="" href="{{ $contributor->repository_url }}">spatie/{{ $contributor->repository_name }}</a>
        </p>
    </div>
</div>