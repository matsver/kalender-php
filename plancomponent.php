<div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
  <article class="overflow-hidden rounded-lg shadow-lg">
    <a href="convertToId.php?name=<?php echo urlencode($naam)?>&spelers=<?=$spelers?>">
      <img alt="<?=$image?>" class="block h-auto w-full" src="img/<?=$image?>" style="height: 300px;">
    </a>
    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
      <h1 class="text-lg">
        <a class="hover:underline text-black" href="convertToId.php?name=<?php echo urlencode($naam)?>&spelers=<?=$spelers?>"><?=$naam?></a>
      </h1>
    </header>
    <p class="mx-4 text-grey-darker text-sm">
      Start tijd: <?=$start?>
    </p>
    <p class="mx-4 text-grey-darker text-sm">
      Eind tijd: <?=$end?>
    </p>
    <footer class="flex items-center justify-between leading-none p-2 md:p-4">
      <a class="flex items-center no-underline hover:underline text-black">
        <p class="ml-2 text-sm">
          Uitlegger: <?=$uitlegger?>
        </p>
        <div class="a">
          <a href="edit.php?id=<?=$id?>" class="no-underline text-grey-darker hover:text-red-dark">
            <span class="hidden">Like</span>
            <i class="far fa-lg fa-edit"></i>
          </a>
      </a>
      <a href="delete.php?id=<?=$id?>" class="no-underline text-grey-darker hover:text-red-dark">
        <span class="hidden">Like</span>
        <i class="far fa-lg fa-times-circle"></i>
      </a>
</div>
</footer>
</article>
</div>