<li
class="sidebar-item  has-sub">
<a href="#" class='sidebar-link'  style="color: var(--bs-dark-text);">
    <i class="bi bi-stack"></i>
    <span>jurusan&Kelas</span>
</a>
<ul class="submenu ">
    <li class="submenu-item ">
        <a href="{{ route('backend.jurusan.index') }}" style="color: var(--bs-dark-text);">{{ __('sidebar.major') }}</a>
    </li>
    <li class="submenu-item ">
        <a href="{{ route('backend.kelas.index') }}" style="color: var(--bs-dark-text);">{{ __('sidebar.class') }}</a>
    </li>
</ul>
</li>