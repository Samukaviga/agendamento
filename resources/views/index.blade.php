<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Agendamento</title>
    @vite('resources/css/app.css')
</head>

<body>

    <main class="bg-gray-100 w-screen h-screen flex justify-center items-center">

        <section class="px-4 py-8 antialiased md:py-16">

            <div
                class="mx-auto grid max-w-screen-xl rounded-lg bg-white p-4 md:p-8 justify-items-center items-center grid-cols-2 lg:grid-cols-12 lg:gap-8 lg:p-16 xl:gap-16">

                <div class="col-span-2 lg:col-span-5 lg:mt-0 ">
                    <a href="#">
                        <img class="mb-4 h-56 w-56 sm:h-96 sm:w-96 md:h-full md:w-80"
                            src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-components.svg"
                            alt="peripherals" />

                    </a>
                </div>

                <div class="flex flex-col justify-center items-center place-self-center col-span-2 lg:col-span-7">
                    <h1
                        class="mb-3 text-2xl font-bold leading-tight tracking-tight text-gray-900 md:text-4xl">
                        Agende seu horário
                    </h1>
                    <p class="mb-6 text-gray-500 text-center">
                        Escolha o serviço, dia e horário que deseja ser atendido
                    </p>

                    <a href="/servicos"
                        class="w-full rounded-lg bg-gray-800 px-5 py-3 text-center text-base font-medium text-white hover:bg-gray-700">
                        Agendar
                    </a>
                </div>

            </div>

        </section>

    </main>

</body>

</html>