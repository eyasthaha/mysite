<link href="{{ asset('assets/css/right-sidebar.css') }}" rel="stylesheet">

<h3>Sidebar</h3>

<div class="sidebar-container">
    <div>
        <h3>Newsletter</h3>
        <form id="newsletter" action="{{route('newsletter.add')}}" method="post">
            @csrf
            <input name="newsletter_email" type="email" placeholder="Enter your Email ID" autocomplete="false" required>
            <input type="hidden" name="status" value="true">
            <p>Stay up to date with our latest news</p>
            @if(Session::has('success'))
            <p style="color: crimson">{{ session('success') }}</p>
            @endif
            <button type="submit">Subscribe <i class="fa fa-envelope" aria-hidden="true"></i></button>
        </form>
    </div>
    <div>
        @include('reusable.trending')
    </div>
    <div>
        {{-- <img src="{{asset('assets/images/506.jpg')}}"height="300px" alt=""> --}}
    </div>
    <div></div>
</div>