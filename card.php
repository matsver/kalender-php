<div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
  <article class="overflow-hidden rounded-lg shadow-lg">
    <a href="info.php?id=<?php echo urlencode($id)?>">
      <img alt="<?=$name?>" class="block h-auto w-full" src="img/<?=$image?>" style="height: 300px;">
    </a>
    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
      <h1 class="text-lg">
        <a class="hover:underline text-black" href="info.php?id=<?php echo urlencode($id)?>"><?=$name?></a>
      </h1>
    </header>
    <p class="mx-4 text-grey-darker text-sm">
        Minimale spelers: <?=$min?>
      </p>
    <p class="mx-4 text-grey-darker text-sm">
        Maximale spelers: <?=$max?>
      </p>
    <footer class="flex items-center justify-between leading-none p-2 md:p-4">
      <a class="flex items-center no-underline hover:underline text-black" href="info.php?id=<?php echo urlencode($id)?>">
        <p class="ml-2 text-sm">
          Speeltijd: <?=$tijd?> Minuten
        </p>
      </a>
    </footer>
  </article>
</div>