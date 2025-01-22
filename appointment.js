$(document).ready(function () {
    // Takvim oluşturma
    $('#calendar').datepicker({
        format: 'dd/mm/yyyy',
        startDate: '01/01/2025',
        endDate: '31/12/2025',
        autoclose: true,
        todayHighlight: true
    });

    // Saat aralıkları
    const timeGrid = document.getElementById("time-selection");
    for (let hour = 13; hour <= 21; hour++) {
        const timeDiv = document.createElement("div");
        timeDiv.textContent = `${hour}:00 - ${hour + 1}:00`;
        timeDiv.dataset.time = `${hour}:00 - ${hour + 1}:00`;
        timeDiv.classList.add("time-slot");
        timeGrid.appendChild(timeDiv);

        // Saat seçme
        timeDiv.addEventListener("click", () => {
            document.querySelectorAll(".time-slot").forEach((slot) => slot.classList.remove("selected"));
            timeDiv.classList.add("selected");
        });
    }

    // Randevu oluşturma
    $("#create-appointment").click(function () {
        const selectedDate = $("#calendar").val();
        const selectedTime = document.querySelector(".time-slot.selected")?.dataset.time;
        const selectedService = $("input[name='service']:checked").val();
        const address = $("#address").val();
        const name = $("#name").val();

        if (!selectedDate || !selectedTime || !selectedService || !address || !name) {
            alert("Lütfen tüm alanları doldurunuz.");
            return;
        }

        // Randevuyu veritabanına kaydet (örnek PHP API kullanabilirsiniz)
        $.post("/api/save_appointment.php", {
            date: selectedDate,
            time: selectedTime,
            service: selectedService,
            address: address,
            name: name
        }).done(function (response) {
            if (response.success) {
                window.open("", "_blank").document.write("<h1>Randevu başarıyla oluşturuldu</h1>");
            } else {
                alert("Randevu oluşturulamadı. Lütfen tekrar deneyiniz.");
            }
        }).fail(function () {
            alert("Bir hata oluştu. Lütfen tekrar deneyiniz.");
        });
    });
});
