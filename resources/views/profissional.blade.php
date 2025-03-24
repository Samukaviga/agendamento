<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Agendamento</title>
    @vite('resources/css/app.css')
</head>

<body>

    <main class="bg-gray-100 px-5 w-screen h-screen flex justify-center items-center">

        <section class="rounded-lg bg-white w-full md:w-260 grid grid-cols-6">

            <div class="col-span-4 flex flex-col items-center w-full p-4 py-10 border-r border-r-slate-300">

                <h2 class="font-bold text-2xl mb-5">Escolha um serviço</h2>

                <div class="grid grid-cols-3 grid-rows-4 gap-5 h-[500px] w-full md:w-150  overflow-y-auto">

                    <a href="#"
                        class="col-span-1 border border-slate-300 hover:bg-slate-100 w-40 h-25 gap-2 rounded-lg flex flex-col items-center py-5 cursor-pointer">

                        <i class="fa-regular fa-user text-2xl text-slate-400"></i>
                        <p class="text-slate-400 font-bold text-center">Leticia</p>
                    </a>

                    <a href="#"
                        class="col-span-1 border border-slate-300 hover:bg-slate-100 w-40 h-25 gap-2 rounded-lg flex flex-col items-center py-5 cursor-pointer">

                        <i class="fa-regular fa-user text-2xl text-slate-400"></i>
                        <p class="text-slate-400 font-bold text-center">Leticia</p>
                    </a>

                    <a href="#"
                        class="col-span-1 border border-slate-300 hover:bg-slate-100 w-40 h-25 gap-2 rounded-lg flex flex-col items-center py-5 cursor-pointer">

                        <i class="fa-regular fa-user text-2xl text-slate-400"></i>
                        <p class="text-slate-400 font-bold text-center">Leticia</p>
                    </a>

                    <a href="#"
                        class="col-span-1 border border-slate-300 hover:bg-slate-100 w-40 h-25 gap-2 rounded-lg flex flex-col items-center py-5 cursor-pointer">

                        <i class="fa-regular fa-user text-2xl text-slate-400"></i>
                        <p class="text-slate-400 font-bold text-center">Leticia</p>
                    </a>

                    <a href="#"
                        class="col-span-1 border border-slate-300 hover:bg-slate-100 w-40 h-25 gap-2 rounded-lg flex flex-col items-center py-5 cursor-pointer">

                        <i class="fa-regular fa-user text-2xl text-slate-400"></i>
                        <p class="text-slate-400 font-bold text-center">Leticia</p>
                    </a>

                    <a href="#"
                        class="col-span-1 border border-slate-300 hover:bg-slate-100 w-40 h-25 gap-2 rounded-lg flex flex-col items-center py-5 cursor-pointer">

                        <i class="fa-regular fa-user text-2xl text-slate-400"></i>
                        <p class="text-slate-400 font-bold text-center">Leticia</p>
                    </a>

                    <a href="#"
                        class="col-span-1 border border-slate-300 hover:bg-slate-100 w-40 h-25 gap-2 rounded-lg flex flex-col items-center py-5 cursor-pointer">

                        <i class="fa-regular fa-user text-2xl text-slate-400"></i>
                        <p class="text-slate-400 font-bold text-center">Leticia</p>
                    </a>

                </div>




                <a href="/"
                    class="w-30 mt-4 rounded-lg bg-gray-800 px-5 py-3 text-center text-base font-medium text-white hover:bg-gray-700 ">
                    <i class="fa-solid fa-arrow-left text-white"></i>
                    Voltar
                </a>

            </div>

            <div class="col-span-2">

                <h2>Resumo</h2>

                <div>
                    <p>Serviço</p>
                    <p>Postiça Realista</p>
                </div>

                <div>
                    <p>Preço total</p>
                    <p>R$ 65</p>
                </div>

            </div>

        </section>

    </main>

</body>

</html>