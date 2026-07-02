
<div class="sidebar">

    <h2>Admin Panel</h2>

    <ul>
        <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
        <li><a href="{{ route('admin.courses.index') }}">Courses</a></li>
        <li><a href="{{ route('admin.lessons.index') }}">Lessons</a></li>
        <li><a href="{{ route('admin.trainers.index') }}">Trainers</a></li>
        <li><a href="{{ route('admin.graduates.index') }}">Graduates</a></li>
        <li><a href="{{ route('admin.abouts.index') }}">About</a></li>
        <li><a href="{{ route('admin.faqs.index') }}">Faqs</a></li>
        <li><a href="{{ route('admin.partners.index') }}">Partners</a></li>
        <li><a href="{{ route('admin.articles.index') }}">Articles</a></li>
        <li><a href="{{ route('admin.contacts.index') }}">Contacts</a></li>
        <li><a href="{{ route('admin.contact-messages.index') }}">Contact Messages</a>
</li>

<div style="margin-top: 10px; border-top: 1px dashed #ccc; padding-top: 5px;">
    <a href="{{ route('logout') }}" 
       onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
       style="color: #b33939; font-weight: bold; text-decoration: none; display: block; padding: 10px 15px;">
       <span style="margin-right: 8px;">➔</span> Çıxış et
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</div>
    </ul>

</div>