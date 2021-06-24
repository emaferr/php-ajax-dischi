<main id="app">

<div class="contenitore_card d-flex justify-content-center flex-wrap  mb-5">

    <div v-for="album in albums" class="card bg_card rounded-0 mt-4 mx-4 shadow-sm" style="width: 12rem;">
        <img style="width: 190px; height: 190px;" :src="album.poster" class="card-img-top pt-3 px-3" alt="">
        <div class="card-body text-center">
            <h4 class="card-title text-white">{{album.title}}</h4>
            <div class="card-text d-flex flex-column text-white-50">
                <span>{{album.author}}</span>
                <span>{{album.year}}</span>
            </div>
        </div>
    </div>

</div>

</main>