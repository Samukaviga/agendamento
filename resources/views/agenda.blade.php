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

    <main class="bg-gray-100 px-5 w-screen h-screen h-screen flex justify-center items-center ">


        <section class=" flex flex-col items-center rounded-lg bg-white w-full h-[500px] md:w-160 p-4">

            <h2 class="font-bold text-2xl mb-5">Selecione o dia</h2>

            <div class="flex flex-col gap-5 h-[500px] w-full md:w-150 overflow-y-auto">

            <div class="lg:w-7/12 md:w-9/12 sm:w-10/12 mx-auto p-4 ">
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="flex items-center justify-between px-6 py-3 bg-gray-700">
                        <button id="prevMonth" class="text-white">Antes</button>
                        <h2 id="currentMonth" class="text-white"></h2>
                        <button id="nextMonth" class="text-white">Proximo</button>
                    </div>
                    <div class="grid grid-cols-7 gap-2 p-4" id="calendar">
                        <!-- Calendar Days Go Here -->
                    </div>
                    <div id="myModal" class="modal hidden fixed inset-0 flex items-center justify-center z-50">
                        <div class="modal-overlay absolute inset-0 bg-black opacity-50"></div>

                        <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
                            <div class="modal-content py-4 text-left px-6">
                                <div class="flex justify-between items-center pb-3">
                                    <p class="text-2xl font-bold">Selected Date</p>
                                    <button id="closeModal" class="modal-close px-3 py-1 rounded-full bg-gray-200 hover:bg-gray-300 focus:outline-none focus:ring">✕</button>
                                </div>
                                <div id="modalDate" class="text-xl font-semibold"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            </div>


            <a href="/"
                class="w-30 mt-4 rounded-lg bg-gray-800 px-5 py-3 text-center text-base font-medium text-white hover:bg-gray-700 ">
                <i class="fa-solid fa-arrow-left text-white"></i>
                Voltar
            </a>


        </section>

    </main>


    <script>
        // Função para gerar o calendário de um mês e ano específicos
        function generateCalendar(year, month) {
            const calendarElement = document.getElementById('calendar');
            const currentMonthElement = document.getElementById('currentMonth');

            // Criar um objeto Date para o primeiro dia do mês especificado
            const firstDayOfMonth = new Date(year, month, 1);
            const daysInMonth = new Date(year, month + 1, 0).getDate();

            // Limpar o calendário
            calendarElement.innerHTML = '';

            // Definir o texto do mês atual
            const monthNames = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];
            currentMonthElement.innerText = `${monthNames[month]} ${year}`;

            // Calcular o dia da semana do primeiro dia do mês (0 - Domingo, 1 - Segunda, ..., 6 - Sábado)
            const firstDayOfWeek = firstDayOfMonth.getDay();

            // Criar os cabeçalhos para os dias da semana
            const daysOfWeek = ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'];
            daysOfWeek.forEach(day => {
                const dayElement = document.createElement('div');
                dayElement.className = 'text-center font-semibold';
                dayElement.innerText = day;
                calendarElement.appendChild(dayElement);
            });

            // Criar caixas vazias para os dias antes do primeiro dia do mês
            for (let i = 0; i < firstDayOfWeek; i++) {
                const emptyDayElement = document.createElement('div');
                calendarElement.appendChild(emptyDayElement);
            }

            // Criar caixas para cada dia do mês
            for (let day = 1; day <= daysInMonth; day++) {
                const dayElement = document.createElement('div');
                dayElement.className = 'text-center py-2 border cursor-pointer';
                dayElement.innerText = day;

                // Verificar se esta data é a data atual
                const currentDate = new Date();
                if (year === currentDate.getFullYear() && month === currentDate.getMonth() && day === currentDate.getDate()) {
                    dayElement.classList.add('bg-blue-500', 'text-white'); // Adicionar classes para indicar o dia atual
                }

                calendarElement.appendChild(dayElement);
            }

            // Re-aplicar os eventos de clique após a criação dos dias
            addClickEventToDays(year, month);
        }

        // Função para adicionar eventos de clique aos dias do calendário
        function addClickEventToDays(year, month) {
            const dayElements = document.querySelectorAll('.cursor-pointer');
            dayElements.forEach(dayElement => {
                dayElement.addEventListener('click', () => {
                    const day = parseInt(dayElement.innerText);
                    const selectedDate = new Date(year, month, day);
                    const options = {
                        weekday: 'long',
                        year: 'numeric',
                        month: 'long',
                        day: 'numeric'
                    };
                    const formattedDate = selectedDate.toLocaleDateString(undefined, options);
                    //showModal(formattedDate);
                    console.log('Data selecionada:', formattedDate);
                    
                });
            });
        }

        // Event listeners para os botões de navegação do mês
        document.getElementById('prevMonth').addEventListener('click', () => {
            currentMonth--;
            if (currentMonth < 0) {
                currentMonth = 11;
                currentYear--;
            }
            generateCalendar(currentYear, currentMonth);
        });

        document.getElementById('nextMonth').addEventListener('click', () => {
            currentMonth++;
            if (currentMonth > 11) {
                currentMonth = 0;
                currentYear++;
            }
            generateCalendar(currentYear, currentMonth);
        });


        // Inicializar o calendário com o mês e ano atuais
        const currentDate = new Date();
        let currentYear = currentDate.getFullYear();
        let currentMonth = currentDate.getMonth();
        generateCalendar(currentYear, currentMonth);
    </script>

</body>

</html>