<html>
  <head>
    <title>Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <section class="w-full h-screen flex flex-col justify-center items-center p-4 gap-4">
      <div class="bg-white flex p-5 px-8 gap-16 rounded-lg drop-shadow-lg">
        <div class="bg-[url('https://i.pinimg.com/originals/bd/38/b8/bd38b8584455009f03e1c87dfda809ac.jpg')] w-52 h-52 rounded-full bg-cover"></div>
        <?php
          $fname = $_POST['fname'];
          $lname = $_POST['lname'];
          $register = $_POST['regnum'];
          $email = $_POST['email'];
          $gender = $_POST['gender'];
          echo"
            <div class='flex flex-col p-4 gap-1 justify-center'>
              <a class='text-5xl text-teal-400 font-semibold'>
                $fname $lname
              </a>
              <div class='*:text-xl flex justify-between gap-10'>
                <a class='font-semibold text-zinc-600'>
                  $email
                </a>
                <a class='text-zinc-600'>
                  #$register
                </a>
              </div>
              <a class='text-zinc-400 text-xl'>
                $gender
              </a>
            </div>
          ";
        ?>
      </div>
    </section>
  </body>
</html>
