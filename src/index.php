<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SCM FORUM</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../dist/style.css">
</head>

<style>
#check:checked~nav {
  left: 0;
}

#check:checked+.hamburger i:first-child {
  display: none;
}

#check:checked+.hamburger i:nth-child(2) {
  display: block;
}
</style>

<body class="antialiased font-dubai">
  <header class="header-bar">
    <input type="checkbox" name="check" id="check" hidden>
    <label for="check" class="hamburger float-left text-white text-2xl mr-2 pc:hidden mdx:hidden"><i class="bi bi-list"></i><i class="bi bi-x-lg hidden"></i></label>
    <nav class="gnav">
      <ul class="mt-8 flex flex-col gap-4 w-90 mx-auto">
        <li>
          <a href="home.php" class="menu">HOME</a>
        </li>
        <li>
          <a href="#" class="menu">PUBLIC</a>
          <ul class="flex flex-col gap-3 mt-3">
            <li><a href="question.php" class="menu menu-pd">Question</a></li>
            <li><a href="tag.php" class="menu menu-pd">Tag</a></li>
            <li><a href="user.php" class="menu menu-pd">User</a></li>
          </ul>
        </li>
      </ul>
    </nav>

    <h1 class="logo">
      <a href="#" class="flex items-center px-3 h-fill-available hover:hover-gradient sp:p-0">
        <img src="../dist/img/scm-forum.png" alt="SCM FORUM" class="block w-8 h-8 sp:w-12">
        <span class="font-extrabold font-mono mx-3 md:mr-5 sp:mx-2 text-white text-xl md:text-sm mt-1 sp:hidden">SCM FORUM</span>
        <a href="#" class="px-4 py-1 bg-transparant hover:bg-purple-500 active:bg-purple-500 hover:text-white active:text-white hover:rounded-2xl md:text-xs sp:text-xs sp:ml-2 md2:mr-4 sp:mt-1 text-sm">Product</a>
      </a>
    </h1>

    <div class="search-area">

      <div class="pc-search w-60 md:w-75 relative sp:hidden">
        <input type="search" name="search" id="search" placeholder="Search..." class="w-full px-10 py-1  focus:outline-0 border-0 sp:hidden focus:shadow-lg ">
        <button type="submit" class="absolute md:left-3 md2:left-2 pc:left-3 top-1/2 translate-y-[-50%]"><i class="bi bi-search text-scm-g1"></i></button>
      </div>

      <div class="sp-search pc:hidden mdx-hidden">
        <a href="#" class="search-btn"><i class=" bi bi-search text-white font-bold"></i></a>
        <form class="search-form absolute p-5 left-0 right-0 w-full top-[56px] bg-scm-g7 hidden" action="" method="">
          <input type="text" placeholder="search" value="" name="s" class="w-full px-10 py-1  focus:outline-0 border-0 focus:shadow-lg">
          <button type="submit" class="absolute left-8 top-1/2 translate-y-[-50%]"><i class="bi bi-search text-scm-g1"></i></button>
        </form>
        <a href="#" class="btn-close hidden"><i class="bi bi-x-lg text-white font-bold"></i></a>
      </div>

      <a href="#" class="profile">Profile</a>
      <a href="#"><i class="bi bi-inbox-fill hover:text-white hover:text-2xl"></i></a>
      <a href="#"><i class="bi bi-archive-fill hover:text-white hover:text-2xl"></i></a>
    </div>
  </header>

  <section class="grid grid-cols-6 md:grid-cols-9 md2:grid-cols-9 pc:pl-28 md2:pl-5 mt-[60px]">
    <div class="side-bar">
      <ul class="mt-8 flex flex-col gap-4 md:pl-5 fixed pc:w-15 mdx:w-22">
        <li>
          <a href="home.php" class="menu">HOME</a>
        </li>
        <li>
          <a href="#" class="menu">PUBLIC</a>
          <ul class="flex flex-col gap-3 mt-3">
            <li><a href="question.php" class="menu sub-menu">Question</a></li>
            <li><a href="tag.php" class="menu sub-menu">Tag</a></li>
            <li><a href="user.php" class="menu sub-menu">User</a></li>
          </ul>
        </li>
      </ul>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="../dist/js/app.js"></script>
</body>

</html>
