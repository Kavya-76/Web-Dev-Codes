function populateSelectors() {
            let monthSelect = document.getElementById("month");
            let yearSelect = document.getElementById("year");

            let months = ["January", "February", "March", "April", "May", "June",
                          "July", "August", "September", "October", "November", "December"];

            months.forEach((month, index) => {
                let option = new Option(month, index);
                monthSelect.add(option);
            });

            let currentYear = new Date().getFullYear();
            for (let i = currentYear - 50; i <= currentYear + 50; i++) {
                let option = new Option(i, i);
                yearSelect.add(option);
            }
        }

        function generateCalendar() {
            let month = document.getElementById("month").value;
            let year = document.getElementById("year").value;
            let firstDay = new Date(year, month, 1).getDay();
            let daysInMonth = new Date(year, month + 1, 0).getDate();

            let calendarDiv = document.getElementById("calendar");
            let calendarHTML = "<table><tr><th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th></tr><tr>";

            for (let i = 0; i < firstDay; i++) {
                calendarHTML += "<td></td>";
            }

            for (let day = 1; day <= daysInMonth; day++) {
                calendarHTML += `<td>${day}</td>`;
                if ((day + firstDay) % 7 === 0) {
                    calendarHTML += "</tr><tr>";
                }
            }

            calendarHTML += "</tr></table>";
            calendarDiv.innerHTML = calendarHTML;
        }

        document.addEventListener("DOMContentLoaded", () => {
            populateSelectors();
            document.getElementById("month").addEventListener("change", generateCalendar);
            document.getElementById("year").addEventListener("change", generateCalendar);
        });