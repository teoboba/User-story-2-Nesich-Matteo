<x-layout title="Presto - Annunci">
    <section class="hero">
        <div>
            <p class="eyebrow">Mercatino online</p>
            <h1>Dai nuova vita agli oggetti che non usi piu.</h1>
            <p class="hero-copy">
                Crea un annuncio con titolo, prezzo, descrizione e categoria. Gli utenti registrati possono pubblicare subito.
            </p>
            <a class="primary-button" href="{{ route('articles.create') }}">Inserisci annuncio</a>
        </div>
    </section>

    <div class="row height-custom justify-content-center align-items-center py-5">
        @forelse ($articles as $article)
            <div class="col-12 col-md-3 ">
                <x-card :article="$article" />
            </div>
        @empty
            <div class="col-12">
                <h3 class="text-center">
                    Non sono ancora stati creati articoli
                </h3>
            </div>
        @endforelse
    </div>
</x-layout>
