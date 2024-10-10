<footer class="footer bg-slate-200 text-base-content p-10">
  <aside>
    <a href="{{ url('/') }}" class="flex gap-2 items-center">
      <img src={{ asset('img/logo-sika3.png') }} alt="logo-sika3" class="h-10 w-auto">
      <h1 class="text-4xl text-blue-600 font-black">SIKA<span class="text-green-400">3</span></h1>
    </a>
    <p class="font-semibold">Salam Sehat, Salam Safety</p>
  </aside>
  <nav>
    <h6 class="footer-title">Contact</h6>
    <a class="link link-hover">Kantor Pusat - Jalan Veteran 129 Gresik 61122, Indonesia</a>
    <a class="link link-hover">Faks : (62-31) 3982304</a>
    <a class="link link-hover">Telepon : </a>
  </nav>
  <nav>
    <h6 class="footer-title">Social Media</h6>
    <i class="fa-brands fa-square-instagram"></i>
    <a class="link link-hover">Privacy policy</a>
    <a class="link link-hover">Cookie policy</a>
  </nav>
  <div>
    <p class="font-semibold">Powered By :</p>
    <a href="{{ url('https://www.silog.co.id/') }}">
      <img src={{ asset('img/logo-silog.png') }} alt="logo-silog" class="h-9 w-auto">
    </a>
  </div>
</footer>