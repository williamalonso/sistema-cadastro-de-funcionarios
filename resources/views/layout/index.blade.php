@include('layout.topo')
@yield('conteudo')
@include('layout.footer')
<style>
    main {
        min-height: calc(100vh - 56px - 92px);
    }
    .cor-icone {
        color:white;
    }
    .alerta {
        padding: 25px;
        border: 1px solid white;
        border-radius: 3px;
        margin: 10px;
        font-size: 18px;
    }
    .foto {
        width: 80px;
        height: 56px;
        object-fit: cover;
        transition: all .4s ease-in;
    }
    .foto:hover {
        transform: scale(1.5);
    }
</style>