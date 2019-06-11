<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="#">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

  <title>Desafio Rits</title>

  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/5f1ea4c594.js"></script>  {{--  <link href="/css/material-kit.css?v=2.0.5" rel="stylesheet" />  --}}

  <!-- CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<style>
    .menufont {
        font-family: 'Ubuntu', sans-serif;
        font-size: 12px;
        line-height: 14px;
        text-align: center;
        letter-spacing: 0.025em;
        text-transform: uppercase;
        color: white;


        /* BG Escuro */

        background: #2E2236;
    }

    .menubotao {
        /* Verde */

        background: #4EEF61;
        border-radius: 50px;
    }
    .natal {
        font-family:  'Ubuntu', sans-serif;
        font-size: 12px;
        line-height: 110%;
        /* or 13px */

        text-align: center;
        letter-spacing: -0.025em;
        text-transform: uppercase;

        /* Verde */

        color: #4EEF61;
    }
    .backgroundImg {
        background-color: rgba(46, 34, 54, 0.8) !important;
        background-image: url('https://paqti.com.br/wp-content/uploads/2018/08/alex-kotliarskyi-361081-unsplash-e1533783277923.jpg');
        background-blend-mode: color;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: top center;
    }


    .retanguloInput {
        background-color: #F6F6F7;
        border-radius: 2px;
    }
    input[type='file'] {
        display: none
    }

      /* Aparência que terá o seletor de arquivo */
      .arquivo {
        width: 100%;
        border: solid 2px;
        border-radius: 30px;
        color: #4EEF61;
        cursor: pointer;
        margin: 10px;
        padding: 10px 20px
      }
</style>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <div class="container-fluid backgroundImg">
        <div class="container" style="margin-bottom:20px;">
            <header>
                <nav class="navbar navbar-light navbar-expand-lg">
                    <div class="navbar-brand">
                            <a href="#">
                                <svg width="120" height="54" viewBox="0 0 140 74" fill="none" xmlns="http://www.w3.org/2000/svg">

                                    <path d="M29.1396 65.5664C28.1772 65.5664 27.3643 65.8872 26.7051 66.5288C26.0459 67.1704 25.7163 67.9438 25.7163 68.8491C25.7163 69.7544 26.0459 70.5322 26.7051 71.1738C27.3643 71.8154 28.1772 72.1362 29.1396 72.1362C29.4648 72.1362 29.7812 72.0923 30.0889 72C30.3965 71.9121 30.6426 71.811 30.8315 71.7012C31.0205 71.5913 31.1963 71.4639 31.3633 71.3188C31.5303 71.1738 31.6357 71.0728 31.6841 71.0156C31.7324 70.9585 31.7676 70.9102 31.7939 70.875L30.981 70.0181L30.9106 70.1104C30.8623 70.1763 30.7876 70.251 30.6821 70.3389C30.5767 70.4268 30.4536 70.5146 30.3174 70.6025C30.1768 70.6904 30.0054 70.7651 29.7944 70.8267C29.5835 70.8882 29.3682 70.9189 29.1396 70.9189C28.5508 70.9189 28.0586 70.7212 27.6631 70.3257C27.2676 69.9302 27.0698 69.438 27.0698 68.8491C27.0698 68.2603 27.2676 67.7681 27.6631 67.3726C28.0586 66.9771 28.5508 66.7793 29.1396 66.7793C29.3506 66.7793 29.5615 66.8145 29.7681 66.8804C29.9702 66.9463 30.1372 67.0166 30.2646 67.0957C30.3877 67.1748 30.5063 67.2627 30.6118 67.3638C30.7173 67.4692 30.7876 67.5396 30.8184 67.5835C30.8491 67.6274 30.8755 67.6582 30.8931 67.6802L31.75 66.8232L31.6489 66.6914C31.583 66.6079 31.4775 66.5024 31.3281 66.3794C31.1787 66.2563 31.0117 66.1333 30.8184 66.0103C30.625 65.8872 30.3833 65.7861 30.0845 65.6982C29.7856 65.6104 29.4692 65.5664 29.1396 65.5664ZM40.6138 69.3457H39.0801L39.8491 67.2759L40.6138 69.3457ZM41.062 70.5146L41.6025 72H43.0439L40.5654 65.6982H39.1284L36.6499 72H38.0913L38.6318 70.5146H41.062ZM48.4448 72H49.7983V69.7939H50.9673L52.1802 72H53.6216L52.2725 69.6138L52.3867 69.5522C52.4658 69.5171 52.5581 69.4512 52.6724 69.3545C52.7822 69.2578 52.8921 69.1436 52.9976 69.0073C53.103 68.8755 53.1953 68.6953 53.2744 68.4756C53.3535 68.2559 53.3931 68.0229 53.3931 67.7681C53.3931 67.188 53.1909 66.7002 52.7822 66.3003C52.3735 65.9004 51.855 65.6982 51.231 65.6982H48.4404L48.4448 72ZM52.0439 67.7681C52.0439 67.9966 51.9648 68.1899 51.8022 68.3481C51.6396 68.5063 51.4331 68.5811 51.187 68.5811H49.7939V66.9155H51.187C51.4331 66.9155 51.6396 66.999 51.8022 67.1572C51.9648 67.3198 52.0439 67.522 52.0439 67.7681ZM59.3345 72H60.688V69.7939H61.8569L63.0698 72H64.5112L63.1621 69.6138L63.2764 69.5522C63.3555 69.5171 63.4478 69.4512 63.562 69.3545C63.6719 69.2578 63.7817 69.1436 63.8872 69.0073C63.9927 68.8755 64.085 68.6953 64.1641 68.4756C64.2432 68.2559 64.2827 68.0229 64.2827 67.7681C64.2827 67.188 64.0806 66.7002 63.6719 66.3003C63.2632 65.9004 62.7446 65.6982 62.1206 65.6982H59.3301L59.3345 72ZM62.9336 67.7681C62.9336 67.9966 62.8545 68.1899 62.6919 68.3481C62.5293 68.5063 62.3228 68.5811 62.0767 68.5811H60.6836V66.9155H62.0767C62.3228 66.9155 62.5293 66.999 62.6919 67.1572C62.8545 67.3198 62.9336 67.522 62.9336 67.7681ZM71.5776 70.7871V69.3896H74.1396V68.1768H71.5776V66.9155H74.8604V65.6982H70.2241V72H74.9526V70.7871H71.5776ZM80.7095 72H82.063V65.6982H80.7095V72ZM88.1802 72H89.5337V69.7939H90.7026L91.9155 72H93.3569L92.0078 69.6138L92.1221 69.5522C92.2012 69.5171 92.2935 69.4512 92.4077 69.3545C92.5176 69.2578 92.6274 69.1436 92.7329 69.0073C92.8384 68.8755 92.9307 68.6953 93.0098 68.4756C93.0889 68.2559 93.1284 68.0229 93.1284 67.7681C93.1284 67.188 92.9263 66.7002 92.5176 66.3003C92.1089 65.9004 91.5903 65.6982 90.9663 65.6982H88.1758L88.1802 72ZM91.7793 67.7681C91.7793 67.9966 91.7002 68.1899 91.5376 68.3481C91.375 68.5063 91.1685 68.5811 90.9224 68.5811H89.5293V66.9155H90.9224C91.1685 66.9155 91.375 66.999 91.5376 67.1572C91.7002 67.3198 91.7793 67.522 91.7793 67.7681ZM102.313 69.3457H100.779L101.548 67.2759L102.313 69.3457ZM102.761 70.5146L103.302 72H104.743L102.265 65.6982H100.828L98.3491 72H99.7905L100.331 70.5146H102.761ZM112.891 70.1543C112.891 70.3916 112.798 70.585 112.614 70.7344C112.429 70.8882 112.179 70.9629 111.854 70.9629C111.572 70.9629 111.3 70.9014 111.045 70.7739C110.786 70.6509 110.619 70.5498 110.544 70.4751C110.469 70.4004 110.412 70.3389 110.373 70.2905L109.56 71.0991L109.661 71.209C109.718 71.2793 109.814 71.3672 109.951 71.4683C110.083 71.5737 110.241 71.6748 110.417 71.7715C110.592 71.8726 110.821 71.9604 111.093 72.0308C111.366 72.1011 111.651 72.1362 111.941 72.1362C112.688 72.1362 113.273 71.9517 113.695 71.5825C114.117 71.2134 114.328 70.7388 114.328 70.1543C114.328 69.7412 114.222 69.4028 114.007 69.1304C113.796 68.8623 113.537 68.6689 113.229 68.5503C112.921 68.436 112.618 68.3306 112.315 68.2427C112.012 68.1548 111.752 68.0493 111.542 67.9219C111.331 67.7944 111.221 67.623 111.221 67.4121C111.221 67.2275 111.3 67.0649 111.458 66.9331C111.616 66.8013 111.823 66.7354 112.078 66.7354C112.293 66.7354 112.5 66.7881 112.702 66.8848C112.904 66.9858 113.04 67.0649 113.102 67.1265C113.163 67.188 113.211 67.2363 113.247 67.2803L114.055 66.4233L113.976 66.3354C113.928 66.2739 113.844 66.1992 113.73 66.1157C113.616 66.0322 113.479 65.9487 113.326 65.8696C113.172 65.7905 112.974 65.7202 112.732 65.6587C112.495 65.5972 112.245 65.5708 111.985 65.5708C111.335 65.5708 110.803 65.751 110.395 66.1113C109.986 66.4717 109.779 66.9067 109.779 67.4165C109.779 67.8296 109.889 68.168 110.1 68.4404C110.315 68.7085 110.575 68.9019 110.878 69.0205C111.181 69.1348 111.484 69.2358 111.792 69.3237C112.1 69.4116 112.359 69.5171 112.57 69.6489C112.781 69.7764 112.891 69.9434 112.891 70.1543Z" fill="white"/>

                                    <path d="M83.9598 6.99031C89.5215 6.99031 94.8553 9.19967 98.788 13.1324C102.721 17.065 104.93 22.3989 104.93 27.9606C104.93 33.5222 102.721 38.8561 98.788 42.7888C94.8553 46.7214 89.5215 48.9308 83.9598 48.9308H55.9598C50.3982 48.9308 45.0643 46.7214 41.1316 42.7888C37.1989 38.8561 34.9896 33.5222 34.9896 27.9606C34.9896 22.3989 37.1989 17.065 41.1316 13.1324C45.0643 9.19967 50.3982 6.99031 55.9598 6.99031H83.9598ZM83.9598 6.94544e-06H55.9598C48.5338 0.00523722 41.4139 2.96024 36.1666 8.21496C30.9193 13.4697 27.9743 20.5937 27.9796 28.0197C27.9848 35.4458 30.9398 42.5656 36.1945 47.8129C41.4492 53.0602 48.5732 56.0052 55.9993 56H83.9993C87.6763 55.9974 91.3168 55.2706 94.7129 53.8611C98.109 52.4515 101.194 50.3869 103.792 47.785C106.391 45.1832 108.451 42.095 109.856 38.6969C111.26 35.2988 111.982 31.6573 111.98 27.9803C111.977 24.3033 111.25 20.6628 109.841 17.2666C108.431 13.8705 106.366 10.7853 103.765 8.18707C101.163 5.58886 98.0746 3.52857 94.6765 2.12383C91.2783 0.719094 87.6368 -0.00258282 83.9598 6.94544e-06Z" fill="#4EEF61"/>

                                    <path d="M18.2295 32.6466V32.446C19.1055 31.9677 19.9082 31.3657 20.6126 30.6585C21.3033 29.8915 21.8907 29.0376 22.36 28.1183C22.9549 26.9096 23.2422 25.5728 23.1963 24.2264C23.2138 22.8404 22.915 21.4686 22.3226 20.2155C21.7234 18.9577 20.8564 17.8461 19.7824 16.9587C18.5714 15.9749 17.1824 15.2332 15.6913 14.7741C13.8888 14.2234 12.012 13.9555 10.1275 13.9799C8.53851 13.9799 7.1093 14.0194 5.91606 14.139C4.68471 14.258 3.65213 14.3772 2.81832 14.4967C1.94719 14.5917 1.08429 14.751 0.236642 14.9733L0 15.0127V41.9799H6.9903V34.513H12.1135L15.8864 41.9799H23.3133L18.2295 32.6466ZM6.9903 20.1754C7.06985 20.136 7.1494 20.136 7.22828 20.0959C7.34727 20.0564 7.50637 20.0163 7.62536 19.9769C7.9222 19.8872 8.22882 19.8337 8.53851 19.8178C8.97569 19.7783 9.49176 19.7382 10.0874 19.7382C12.1129 19.7382 13.6223 20.1754 14.6544 21.0491C15.1248 21.4346 15.5041 21.9194 15.765 22.4687C16.026 23.018 16.1622 23.6182 16.1639 24.2264C16.1815 24.8587 16.0629 25.4874 15.8162 26.0699C15.5695 26.6523 15.2004 27.1749 14.734 27.6022C13.5849 28.5076 12.1433 28.9596 10.683 28.8723H6.9522V20.1754H6.9903Z" fill="white"/>

                                    <path d="M139.245 29.9459C138.806 29.068 138.199 28.2852 137.457 27.6423C136.72 27.0137 135.871 26.5287 134.955 26.2125C134.023 25.8559 133.067 25.564 132.095 25.3387C131.142 25.1008 130.189 24.9016 129.276 24.7431C128.467 24.6058 127.67 24.4067 126.892 24.1475C126.289 23.9549 125.724 23.6593 125.221 23.2738C125.03 23.1232 124.876 22.9299 124.773 22.7094C124.669 22.4888 124.619 22.2472 124.626 22.0037C124.644 21.727 124.725 21.4582 124.863 21.2174C125 20.9767 125.191 20.7703 125.42 20.6139C126.161 20.1321 127.041 19.9086 127.922 19.9782C128.92 19.9597 129.914 20.1074 130.863 20.4154C131.575 20.6657 132.255 20.9989 132.889 21.4081C133.455 21.798 133.963 22.2658 134.398 22.7978L134.557 22.9984L138.807 18.5898L138.648 18.4307C137.877 17.5714 136.979 16.8347 135.986 16.2461C134.952 15.6491 133.861 15.1564 132.73 14.7754C131.286 14.2783 129.768 14.0365 128.241 14.0608C126.708 14.0291 125.179 14.2437 123.714 14.6965C122.51 15.0836 121.381 15.6747 120.377 16.4439C119.459 17.1401 118.712 18.0366 118.193 19.0651C117.718 20.0567 117.474 21.1429 117.478 22.2423C117.443 23.43 117.674 24.6105 118.153 25.6977C118.645 26.5744 119.291 27.3548 120.06 28.0013C120.797 28.6299 121.646 29.1149 122.562 29.4312C123.494 29.7877 124.45 30.0796 125.422 30.3049C126.375 30.5429 127.328 30.7421 128.241 30.9005C129.038 31.0327 129.822 31.2319 130.584 31.4961C131.188 31.6888 131.753 31.9844 132.256 32.3698C132.447 32.5205 132.601 32.7138 132.704 32.9343C132.807 33.1548 132.858 33.3965 132.851 33.6399C132.83 33.9714 132.728 34.2926 132.555 34.5762C132.382 34.8597 132.143 35.0972 131.859 35.2684C131.183 35.7844 130.151 36.0625 128.602 36.0625C127.402 36.0994 126.206 35.9247 125.067 35.5464C124.244 35.2847 123.466 34.8961 122.763 34.3947C122.108 33.9776 121.552 33.4217 121.135 32.7662L120.976 32.5283L116.487 36.8166L116.606 36.9757C117.431 37.961 118.41 38.806 119.506 39.4778C120.634 40.1712 121.832 40.7437 123.08 41.1858C124.715 41.7406 126.434 42.0093 128.161 41.9799C129.878 42.0024 131.589 41.775 133.241 41.3047C134.554 40.9406 135.783 40.3196 136.855 39.4778C137.795 38.7558 138.545 37.8149 139.039 36.737C139.523 35.6641 139.767 34.4986 139.754 33.3217C139.901 32.1703 139.722 31.0008 139.238 29.9459" fill="white"/>

                                    <path d="M60.6472 13.98H53.6569V41.98H60.6472V13.98Z" fill="white"/>

                                    <path d="M67.6369 13.98V20.9703H74.6272V41.98H81.6175V20.9703H88.6071V13.98H67.6369Z" fill="white"/>

                                </svg>
                            </a>
                    </div>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" >
                        <ul class="navbar-nav ml-auto">
                                <li class="dropdown nav-item">
                                    <a href="#" class="nav-link navbar-text" style="color:white;">
                                    A RITS
                                    </a>
                                </li>
                                <li class="dropdown nav-item">
                                    <a href="#" class="nav-link" style="color:white;">
                                    NOSSOS VALORES
                                    </a>
                                </li>
                                <li class="dropdown menubotao nav-item">
                                    <a href="#section1" class="nav-link">
                                        <span style="color:#2E2236;">VAGAS ABERTAS </span>
                                    </a>
                                </li>
                                @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}" style="color:white;">
                                        ENTRAR
                                    </a>
                                </li>
                                @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('home')}}" style="color:white;">
                                        GERENCIAR
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" style="color:white;  text-transform:uppercase" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>

                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">

                                            {{ __('SAIR') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                                @endguest
                        </ul>
                    </div>
                </nav>
            </header>
            <section class="col-md-12 ml-auto mr-auto" style="padding-top:5%; margin-bottom:50px;">
                <article>
                        @if (session('status'))
                            <div class="flex-center alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="flex-center alert alert-danger">
                                    {{ session('error') }}
                            </div>
                        @endif
                    <header>
                        <p class="natal"><bold>Natal/RN - BRASIL</bold></p>
                        <h3 style="color:white; text-align:center;"><span >Desenvolvedor PHP</bold></h3>
                        <p  style="text-align:center;">
                            <a href="#section1">
                                <button class="menubotao" style="text-align:center; width: 150px; height: 40px; border:none; color:#2E2236;">
                                    Candidate-se
                                </button>
                            </a>
                        </p>
                    </header>
                    <p></p>
                </article>
            </section>
            <section>
                <div class="container row col-md-12">
                    <article class="col-md-4">
                        <header>
                            <h3 style="color:white; text-align:justify; font-size: 18px;line-height: 110%; letter-spacing: -0.025em;">
                                Na função de desenvolvedor frontend aqui na Rits você vai:
                            </h3>
                        </header>
                        <ul class="fa-ul" style="color:white; font-size: 16px; line-height: 130%; letter-spacing: -0.025em;">
                            <li style="margin-bottom:15px;">
                                <span class="fa-li"><i class="fas fa-check-circle" style="color:#4EEF61;"></i></span> Transformar layouts (XD e Photoshop) em montagens responsivas utilizando HTML + CSS + JS;
                            </li>
                            <li style="margin-bottom:15px;">
                                <span class="fa-li"><i class="fas fa-check-circle" style="color:#4EEF61;"></i></span> Integrar montagem com APIs desenvolvidas por outras equipes;
                            </li>
                            <li style="margin-bottom:15px;">
                                <span class="fa-li"><i class="fas fa-check-circle" style="color:#4EEF61;"></i></span> Manter e melhorar a base de código existente corrigindo bugs e refatorando código quando necessário
                            </li>
                        </ul>


                    </article>
                    <article class="col-md-4">
                            <header>
                                <h3 style="color:white; text-align:justify; font-size: 18px;line-height: 110%; letter-spacing: -0.025em;">
                                    Na função de desenvolvedor frontend aqui na Rits você vai:
                                </h3>
                            </header>
                            <ul class="fa-ul" style="color:white; font-size: 16px; line-height: 130%; letter-spacing: -0.025em;">
                                <li style="margin-bottom:15px;">
                                    <span class="fa-li"><i class="fas fa-check-circle" style="color:#4EEF61;"></i></span> Transformar layouts (XD e Photoshop) em montagens responsivas utilizando HTML + CSS + JS;
                                </li>
                                <li style="margin-bottom:15px;">
                                    <span class="fa-li"><i class="fas fa-check-circle" style="color:#4EEF61;"></i></span> Integrar montagem com APIs desenvolvidas por outras equipes;
                                </li>
                                <li style="margin-bottom:15px;">
                                    <span class="fa-li"><i class="fas fa-check-circle" style="color:#4EEF61;"></i></span> Manter e melhorar a base de código existente corrigindo bugs e refatorando código quando necessário
                                </li>
                            </ul>
                    </article>
                    <article class="col-md-4">
                            <header>
                                <h3 style="color:white; text-align:justify; font-size: 18px;line-height: 110%; letter-spacing: -0.025em;">
                                    Procuramos alguém que:
                                </h3>
                            </header>
                            <ul class="fa-ul" style="color:white; font-size: 16px; line-height: 130%; letter-spacing: -0.025em;">
                                <li style="margin-bottom:15px;">
                                    <span class="fa-li"><i class="fas fa-check-circle" style="color:#4EEF61;"></i></span>
                                    Possua habilidade arquiteturais para desenvolvimento de software;
                                </li>
                                <li style="margin-bottom:15px;">
                                    <span class="fa-li"><i class="fas fa-check-circle" style="color:#4EEF61;"></i></span>
                                    Goste de trabalhar em equipe;
                                </li>
                                <li style="margin-bottom:15px;">
                                    <span class="fa-li"><i class="fas fa-check-circle" style="color:#4EEF61;"></i></span>
                                    Seja focado, proativo, tenha boa comunicação e relacionamento interpessoal.
                                </li>
                            </ul>
                    </article>
                </div>
            </section>
        </div>
        <div class="container-fluid" id="section1" style="background-color:white; width: 100%; padding-top:30px; padding-bottom:30px;">
            <div class="container flex-center" style="magin-top:30px; text-align:center;">
                <form style="magin-bottom:20px;" method="POST" action="{{route('candidatos.store')}}" enctype="multipart/form-data">
                    @csrf
                    <label style="color:#2E2236;">Informações Gerais</label>
                    <div class="form-group col-md-6 container" >
                        <input type="text" class="form-control form-control-lg retanguloInput" name="nome" placeholder="NOME COMPLETO" required>
                    </div>
                    <div class="form-group col-md-6 container">
                        <input type="email" class="form-control form-control-lg retanguloInput" name="email" placeholder="NOME@EXEMPLO.COM" required>
                    </div>
                    <div class="form-group col-md-6 container">
                        <input type="tel" class="form-control form-control-lg retanguloInput"  name="telefone" placeholder="TELEFONE COM DDD" required>
                    </div>

                    <label style="color:#2E2236;">Carta de apresentação</label>
                    <div class="form-group col-md-6 container">
                        <textarea class="form-control retanguloInput" rows="3" name="resumo" placeholder="Breve resumo sobre você.(Opcional)"></textarea>
                    </div>

                    <label style="color:#2E2236;">Ultimas perguntas</label>
                    <div class="form-group col-md-6 container">
                        <input  type="url" class="form-control form-control-lg retanguloInput"  name="linkedin" placeholder="URL DO SEU LINKEDIN" required>
                    </div>
                    <div class="form-group col-md-6 container">
                        <input  type="url" class="form-control form-control-lg retanguloInput"  name="github" placeholder="URL DO SEU GITHUB" required>
                    </div>
                    <div class="form-group col-md-6 container">
                            <select class="form-control retanguloInput" name="ingles" required>
                                    <option value="" disabled selected>QUAL SEU NÍVEL DE INGLÊS?</option>
                                    <option value="NENHUM">Nenhum</option>
                                    <option value="BASICO">Basico</option>
                                    <option value="INTERMEDIARIO">Intermediário</option>
                                    <option value="FLUENTE">Fluente</option>
                            </select>
                    </div>

                    <div class="form-group col-md-6 container">
                        <input type="number" class="form-control form-control-lg retanguloInput"  name="salario" placeholder="PRETENSÃO SALARIAL">
                    </div>

                    <label style="color:#2E2236;">Anexe seu curriculo em PDF ou DOC</label>
                    <div class="form-group col-md-4 container">
                        <label class="arquivo" for='selecao-arquivo'>
                            <span style="color:#2E2236"><i class="fas fa-paperclip"></i> Escolha o arquivo</span>
                        </label>
                        <input id='selecao-arquivo' type='file' accept="application/pdf, .doc" name="file" required>
                    </div>
                    <div class="form-group col-md-6 container">
                            <button type="submit"  name="submit" class="btn btn-lg btn-block" style="border-radius:50px; background:#4EEF61; color:#2E2236;">ENVIAR</button>
                    </div>
                </form>
            </div>


        </div>




        <footer class="page-footer font-small blue" style="background-color:#F6F6F7;">
            <div class="footer-copyright text-center py-3 row" style="margin-left:15px;">
                <div class="col-md-3">
                    <svg width="78" height="31" viewBox="0 0 78 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M46.4778 3.86964C49.5566 3.86964 52.5092 5.09267 54.6863 7.2697C56.8633 9.44672 58.0863 12.3994 58.0863 15.4782C58.0863 18.5569 56.8633 21.5096 54.6863 23.6866C52.5092 25.8637 49.5566 27.0867 46.4778 27.0867H30.9778C27.899 27.0867 24.9463 25.8637 22.7693 23.6866C20.5923 21.5096 19.3693 18.5569 19.3693 15.4782C19.3693 12.3994 20.5923 9.44672 22.7693 7.2697C24.9463 5.09267 27.899 3.86964 30.9778 3.86964H46.4778ZM46.4778 3.8448e-06H30.9778C26.8669 0.00289918 22.9256 1.63871 20.0208 4.54757C17.1161 7.45643 15.4858 11.4001 15.4887 15.5109C15.4916 19.6218 17.1274 23.5631 20.0363 26.4679C22.9451 29.3726 26.8888 31.0029 30.9996 31H46.4996C48.5351 30.9986 50.5504 30.5962 52.4304 29.8159C54.3104 29.0357 56.0183 27.8928 57.4566 26.4524C58.8949 25.0121 60.0354 23.3026 60.813 21.4215C61.5906 19.5404 61.9901 17.5246 61.9887 15.4891C61.9873 13.4536 61.5849 11.4383 60.8046 9.55832C60.0244 7.67832 58.8815 5.97042 57.4411 4.53213C56.0008 3.09383 54.2913 1.95332 52.4102 1.17569C50.5291 0.39807 48.5133 -0.00142978 46.4778 3.8448e-06Z" fill="#4EEF61"/>
                        <path d="M10.0913 18.0723V17.9613C10.5763 17.6965 11.0206 17.3632 11.4106 16.9717C11.7929 16.5472 12.1181 16.0744 12.3779 15.5655C12.7072 14.8965 12.8662 14.1564 12.8408 13.4111C12.8505 12.6438 12.6851 11.8845 12.3571 11.1908C12.0255 10.4945 11.5455 9.87914 10.9509 9.38789C10.2806 8.8433 9.5117 8.43273 8.68623 8.17857C7.68847 7.87374 6.64948 7.72544 5.60629 7.73894C4.72667 7.73894 3.9355 7.76078 3.27496 7.82702C2.59332 7.89288 2.02172 7.95888 1.56014 8.02499C1.07791 8.07763 0.600231 8.16582 0.130998 8.28884L0 8.31067V23.2389H3.86963V19.1055H6.70571L8.79428 23.2389H12.9056L10.0913 18.0723ZM3.86963 11.1686C3.91367 11.1468 3.95771 11.1468 4.00137 11.1245C4.06724 11.1027 4.15531 11.0805 4.22118 11.0587C4.38551 11.009 4.55524 10.9794 4.72667 10.9706C4.96869 10.9488 5.25437 10.9266 5.58408 10.9266C6.70534 10.9266 7.54092 11.1686 8.11228 11.6522C8.37267 11.8656 8.58262 12.134 8.72708 12.4381C8.87154 12.7422 8.94693 13.0744 8.94786 13.4111C8.95759 13.7611 8.89195 14.1092 8.75538 14.4316C8.61881 14.754 8.4145 15.0433 8.15631 15.2799C7.5202 15.7811 6.7222 16.0313 5.9138 15.983H3.84854V11.1686H3.86963Z" fill="#2E2236"/>
                        <path d="M77.0818 16.5773C76.839 16.0913 76.5028 15.658 76.0923 15.3021C75.684 14.9541 75.2142 14.6856 74.7072 14.5105C74.1912 14.3132 73.6623 14.1516 73.1241 14.0269C72.5964 13.8951 72.0687 13.7849 71.5632 13.6972C71.1157 13.6212 70.6747 13.5109 70.244 13.3675C69.91 13.2608 69.597 13.0972 69.3189 12.8838C69.2129 12.8004 69.1279 12.6934 69.0706 12.5713C69.0134 12.4493 68.9855 12.3155 68.9891 12.1807C68.9994 12.0275 69.0443 11.8787 69.1204 11.7454C69.1966 11.6122 69.302 11.4979 69.4288 11.4114C69.8391 11.1446 70.326 11.0209 70.8139 11.0594C71.3663 11.0492 71.9166 11.131 72.4421 11.3015C72.8361 11.44 73.2124 11.6245 73.5634 11.851C73.8767 12.0668 74.158 12.3258 74.3989 12.6203L74.487 12.7313L76.8394 10.2908L76.7514 10.2028C76.3246 9.7271 75.8279 9.3193 75.2782 8.99344C74.7057 8.66297 74.1017 8.39026 73.4753 8.17933C72.6764 7.90412 71.8356 7.77026 70.9908 7.78374C70.1419 7.76618 69.2956 7.885 68.4844 8.13566C67.8179 8.34992 67.1932 8.67712 66.6375 9.10297C66.1292 9.48835 65.7156 9.9846 65.4281 10.5539C65.1653 11.1029 65.0301 11.7042 65.0326 12.3128C65.0133 12.9703 65.141 13.6237 65.4063 14.2256C65.6783 14.7109 66.0358 15.1429 66.4617 15.5008C66.8699 15.8488 67.3397 16.1173 67.8468 16.2923C68.3628 16.4897 68.8917 16.6513 69.4299 16.776C69.9576 16.9077 70.4853 17.018 70.9908 17.1057C71.4316 17.1789 71.8655 17.2892 72.2878 17.4354C72.6218 17.5421 72.9348 17.7057 73.2129 17.9191C73.3189 18.0025 73.4039 18.1095 73.4611 18.2316C73.5183 18.3536 73.5463 18.4874 73.5426 18.6222C73.5306 18.8056 73.4744 18.9835 73.3787 19.1405C73.283 19.2974 73.1507 19.4289 72.9931 19.5236C72.6194 19.8093 72.0476 19.9633 71.1902 19.9633C70.5262 19.9837 69.8638 19.887 69.2334 19.6776C68.7777 19.5327 68.3475 19.3176 67.9582 19.04C67.5953 18.8091 67.2876 18.5014 67.0567 18.1385L66.9687 18.0068L64.4841 20.3807L64.55 20.4688C65.0066 21.0142 65.5486 21.482 66.1549 21.8539C66.7794 22.2377 67.4426 22.5546 68.1336 22.7993C69.0388 23.1065 69.9902 23.2552 70.946 23.239C71.8966 23.2514 72.844 23.1255 73.7584 22.8652C74.4855 22.6636 75.1654 22.3199 75.7589 21.8539C76.2795 21.4542 76.6947 20.9333 76.9682 20.3366C77.2359 19.7427 77.3709 19.0975 77.3638 18.446C77.4451 17.8087 77.3461 17.1613 77.0781 16.5773" fill="#2E2236"/>
                        <path d="M33.5726 7.73889H29.7029V23.2389H33.5726V7.73889Z" fill="#2E2236"/>
                        <path d="M37.4418 7.73889V11.6085H41.3115V23.2389H45.1811V11.6085H49.0504V7.73889H37.4418Z" fill="#2E2236"/>
                    </svg>
                </div>

                <div class="copyright float-center col-md-6">
                    <p style="font-size: 14px; line-height: 150%; text-align: center; letter-spacing: -0.025em; margin-bottom:3px;"><b> Rits Tecnologia. Todos os direitos reservados.</b></p>
                    <p style="font-size: 14px; line-height: 110%; text-align: center; letter-spacing: -0.025em; margin-bottom:1px;">Desenvolver e evoluir soluções digitais para negócios que</p>
                    <p style="font-size: 14px; line-height: 110%; text-align: center; letter-spacing: -0.025em;">acreditam na tecnologia como força propulsora.</p>
                </div>
                <div class="col-md-3">
                    <p style="font-size: 18px; line-height: 150%; letter-spacing: -0.025em; color: #4EEF61;">Rits.com.br</p>
                </div>
            </div>
        </footer>
    </div>
  <!--   Core JS Files   -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="/js/popper.min.js" type="text/javascript"></script>
  <script src="/js/bootstrap-material-design.min.js" type="text/javascript"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="/js/material-kit.js?v=2.0.5" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      //init DateTimePickers
      materialKit.initFormExtendedDatetimepickers();
      // Sliders Init
      materialKit.initSliders();
    });
    function scrollToDownload() {
      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>
</body>

</html>



