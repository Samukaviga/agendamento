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

    <main class="bg-gray-100 px-5 w-screen min-h-screen flex justify-center items-center py-10">

        <section class="grid md:grid-cols-6 rounded-lg bg-white w-full md:max-w-[1040px] p-4">

            <div class="md:col-span-4 flex flex-col items-center w-full p-4 py-10 md:border-r md:border-r-slate-300">

                <h2 class="font-bold text-2xl mb-5">Escolha um profissional</h2>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5 w-full md:w-150 max-h-[350px] overflow-y-auto place-items-center">

                    <a href="/agenda" class="border border-slate-300 hover:bg-slate-100 w-40 h-24 gap-2 rounded-lg flex flex-col items-center py-5 cursor-pointer">
                        <i class="fa-regular fa-user text-2xl text-slate-400"></i>
                        <p class="text-slate-400 font-bold text-center">Leticia</p>
                    </a>

                    <a href="/agenda" class="border border-slate-300 hover:bg-slate-100 w-40 h-24 gap-2 rounded-lg flex flex-col items-center py-5 cursor-pointer">
                        <i class="fa-regular fa-user text-2xl text-slate-400"></i>
                        <p class="text-slate-400 font-bold text-center">Leticia</p>
                    </a>

                    <a href="/agenda" class="border border-slate-300 hover:bg-slate-100 w-40 h-24 gap-2 rounded-lg flex flex-col items-center py-5 cursor-pointer">
                        <i class="fa-regular fa-user text-2xl text-slate-400"></i>
                        <p class="text-slate-400 font-bold text-center">Leticia</p>
                    </a>

                    <a href="/agenda" class="border border-slate-300 hover:bg-slate-100 w-40 h-24 gap-2 rounded-lg flex flex-col items-center py-5 cursor-pointer">
                        <i class="fa-regular fa-user text-2xl text-slate-400"></i>
                        <p class="text-slate-400 font-bold text-center">Leticia</p>
                    </a>

                    <a href="/agenda" class="border border-slate-300 hover:bg-slate-100 w-40 h-24 gap-2 rounded-lg flex flex-col items-center py-5 cursor-pointer">
                        <i class="fa-regular fa-user text-2xl text-slate-400"></i>
                        <p class="text-slate-400 font-bold text-center">Leticia</p>
                    </a>

                    <a href="/agenda" class="border border-slate-300 hover:bg-slate-100 w-40 h-24 gap-2 rounded-lg flex flex-col items-center py-5 cursor-pointer">
                        <i class="fa-regular fa-user text-2xl text-slate-400"></i>
                        <p class="text-slate-400 font-bold text-center">Leticia</p>
                    </a>

                    <a href="/agenda" class="border border-slate-300 hover:bg-slate-100 w-40 h-24 gap-2 rounded-lg flex flex-col items-center py-5 cursor-pointer">
                        <i class="fa-regular fa-user text-2xl text-slate-400"></i>
                        <p class="text-slate-400 font-bold text-center">Leticia</p>
                    </a>

                    <a href="/agenda" class="border border-slate-300 hover:bg-slate-100 w-40 h-24 gap-2 rounded-lg flex flex-col items-center py-5 cursor-pointer">
                        <i class="fa-regular fa-user text-2xl text-slate-400"></i>
                        <p class="text-slate-400 font-bold text-center">Leticia</p>
                    </a>

                    <a href="/agenda" class="border border-slate-300 hover:bg-slate-100 w-40 h-24 gap-2 rounded-lg flex flex-col items-center py-5 cursor-pointer">
                        <i class="fa-regular fa-user text-2xl text-slate-400"></i>
                        <p class="text-slate-400 font-bold text-center">Leticia</p>
                    </a>

                    <a href="/agenda" class="border border-slate-300 hover:bg-slate-100 w-40 h-24 gap-2 rounded-lg flex flex-col items-center py-5 cursor-pointer">
                        <i class="fa-regular fa-user text-2xl text-slate-400"></i>
                        <p class="text-slate-400 font-bold text-center">Leticia</p>
                    </a>

                    <a href="/agenda" class="border border-slate-300 hover:bg-slate-100 w-40 h-24 gap-2 rounded-lg flex flex-col items-center py-5 cursor-pointer">
                        <i class="fa-regular fa-user text-2xl text-slate-400"></i>
                        <p class="text-slate-400 font-bold text-center">Leticia</p>
                    </a>

                    <a href="/agenda" class="border border-slate-300 hover:bg-slate-100 w-40 h-24 gap-2 rounded-lg flex flex-col items-center py-5 cursor-pointer">
                        <i class="fa-regular fa-user text-2xl text-slate-400"></i>
                        <p class="text-slate-400 font-bold text-center">Leticia</p>
                    </a>

                </div>

                <a href="/" class="w-30 mt-6 rounded-lg bg-gray-800 px-5 py-3 text-center text-base font-medium text-white hover:bg-gray-700 inline-flex items-center gap-2">
                    <i class="fa-solid fa-arrow-left"></i> Voltar
                </a>

            </div>

            <div class="md:col-span-2 hidden md:block p-4">
                <h2 class="font-bold text-xl mb-3">Resumo</h2>

                <div class="mb-3">
                    <p class="font-bold">Serviço</p>
                    <p class="text-slate-600">Postiça Realista</p>
                </div>

                <div>
                    <p class="font-bold">Preço total</p>
                    <p class="text-slate-600">R$ 65</p>
                </div>

            </div>

        </section>

    </main>

</body>

</html>
