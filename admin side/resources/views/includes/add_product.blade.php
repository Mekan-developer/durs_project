<div class="h-full w-full flex justify-center">
    <form class="form" method="post" action="create" enctype="multipart/form-data" autocomplete="off">
        @csrf
        {{-- category, img, color --}}
        <div class="text-slate-400 text-xs">
            <select class="w-24 mb-2 text-center mt-10 border-none " name="categories" id="">
                <option value="LUX">LUX</option>
                <option value="TMEX">TMEX</option>
                <option value="ASTAR">ASTAR</option>
                <option value="ECONOM">ECONOM</option>
                <option value="Kafel ýelimi">Kafel ýelimi</option>
            </select>
            <label for="img"  class="block w-24 h-32 rounded-lg bg-white text-center font-serif pt-2">Harydyň suraty</label>
            <input id="img" type="file" name="images" class="hidden"><br>
            <label class="px-4 py-2 mt-16 rounded bg-white" for="color">reňk saýlaň</label>
            <input class="hidden" type="color" name="btn_color" id="color">
        </div>
        {{-- TM --}}
        <div style="width:225px;  font-size:14px;" class="TM_RU_EN">
            <p class="lang">TM</p>
            <input class="my-2 pl-1 h-8 w-full border-none" name="ady_TM" type="text" placeholder="önümiň ady:">
            <textarea class="mb-2 pl-1 w-full resize-none" name="sarp_edilisi_TM" id=""  rows="4" placeholder="Sarp edilişi:"></textarea>
            <textarea class="w-full pl-1 resize-none" name="ulanys_hasiyetleri_TM" id="" rows="8" placeholder="Ulanyş we häsiýetleri:"></textarea>
        </div>
        {{-- RU --}}
        <div style="width:225px;  font-size:14px;" class="TM_RU_EN">
            <p class="lang">RU</p>
            <input class="my-2 pl-1 h-8 w-full border-none" name="ady_RU" type="text" placeholder="Название товара:">
            <textarea class="mb-2 pl-1 w-full resize-none" name="sarp_edilisi_RU" id=""  rows="4" placeholder="Расход:"></textarea>
            <textarea class="w-full pl-1 resize-none" name="ulanys_hasiyetleri_RU" id="" rows="8" placeholder="Применение и свойства:"></textarea>
        </div>
        {{-- EN --}}
        <div style="width:225px;  font-size:14px;" class="TM_RU_EN relative">
            <p class="lang">EN</p>
            <input class="my-2 pl-1 h-8 w-full border-none" name="ady_EN" type="text" placeholder="product name:">
            <textarea class="mb-2 pl-1 w-full resize-none" name="sarp_edilisi_EN" id=""  rows="4" placeholder="Consumption:"></textarea>
            <textarea class="w-full pl-1 resize-none" name="ulanys_hasiyetleri_EN" id="" rows="8" placeholder="Usage and types:"></textarea>
        </div>
        <input class="submit" type="submit" value="ÝOLLA">
    </form>
</div>
