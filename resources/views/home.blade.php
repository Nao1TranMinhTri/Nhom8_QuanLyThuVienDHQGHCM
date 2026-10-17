<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-teal-50 text-slate-800 antialiased min-h-screen">
  <div class="relative min-h-screen w-full overflow-hidden bg-linear-to-br from-teal-50 via-teal-100/70 to-emerald-200/60">
    {{-- background --}}
    <div class="absolute inset-0 z-0 pointer-events-none">
      <div class="absolute top-1/4 left-1/3 w-96 h-96 bg-white/80 rounded-full blur-3xl opacity-70"></div>
      <div class="absolute bottom-10 right-10 w-125 h-125 bg-emerald-300/50 rounded-full blur-3xl opacity-60"></div>
      <div class="absolute bottom-5 left-10 w-100 h-100 bg-teal-200/60 rounded-full blur-3xl opacity-60"></div>
    </div>
    
    {{-- content --}}
    <div class="relative z-10 p-8 w-full ">
      {{-- title --}}
      <div class="text-center mb-8">
        <div class="flex mx-auto items-center justify-center w-20 h-20 rounded-2xl bg-white shadow-lg shadow-teal-600/20 border border-slate-100 overflow-hidden mb-3">
          <img src="images/icon_web.png" alt="Logo Đại học" class="w-16 h-16 object-contain">
        </div>
        <h1 class="text-3xl font-bold text-slate-900">Thư Viện Đại Học Quốc Gia Hồ Chí Minh</h1>
        <p class="text-base text-teal-700 font-medium tracking-wide uppercase mt-1">cổng thông tin mượn trả tài liệu</p>
      </div>

      {{-- form đăng nhập --}}
      <form action="" method="POST">
        @csrf

        
      </form>
    </div>

  </div>
</body>

</html>