function renderCalendar(month, year) {
    const daysOfMonth = new Date(year, month, 0).getDate();
    const firstDay = new Date(year, month - 1, 1).getDay();
    const daysContainer = document.getElementById('days');
    const monthYear = document.getElementById('monthYear');
    
 
    monthYear.textContent = `${year} - ${month}`;

    daysContainer.innerHTML = ''; 

   
    for (let i = 0; i < firstDay; i++) {
        const emptyDiv = document.createElement('div');
        daysContainer.appendChild(emptyDiv);
    }

   
    for (let day = 1; day <= daysOfMonth; day++) {
        const dayDiv = document.createElement('div');
        dayDiv.textContent = day;
        dayDiv.onclick = function() {
            alert(`Seçilen gün: ${day}`);
        };
        daysContainer.appendChild(dayDiv);
    }
}

const today = new Date();
let month = today.getMonth() + 1; 
let year = today.getFullYear();

renderCalendar(month, year);