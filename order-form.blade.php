<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Form Pesanan</title>

    <style>
        /* 🌐 --- GOOGLE TRANSLATE CUSTOM STYLE --- */
#google_translate_container {
    position: fixed;
    top: 80px;
    right: 40px; /* posisi agak ke kiri sedikit */
    z-index: 9999;
    max-width: 210px; /* batasi lebar supaya muat rapi */
    overflow: hidden; /* potong bagian yang keluar */
    border-radius: 30px;
}



        #google_translate_element {
            background: rgba(255, 255, 255, 0.95);
            padding: 8px 16px;
            border-radius: 30px;
            box-shadow: 0 4px 15px rgba(211, 84, 0, 0.25);
            display: flex;
            align-items: center;
            gap: 8px;
            border: 1px solid rgba(211, 84, 0, 0.3);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        #google_translate_element:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 20px rgba(211, 84, 0, 0.4);
        }

        /* 🌐 Ikon globe */
        #google_translate_element::before {
            content: "🌐";
            font-size: 18px;
        }

        /* Hilangkan tampilan asli Google */
        .goog-logo-link,
        .goog-te-gadget span,
        .goog-te-banner-frame.skiptranslate {
            display: none !important;
        }

        body {
            top: 0px !important;
        }

        .goog-te-gadget {
            color: transparent !important;
        }

        /* Style dropdown combo */
        .goog-te-combo {
            background: transparent;
            border: none;
            font-size: 14px;
            font-weight: 600;
            color: #d35400;
            outline: none;
            cursor: pointer;
            padding-right: 2px; /* ruang untuk panah kanan */
            appearance: none; /* hilangkan panah bawaan */
            background-image: url("data:image/svg+xml;utf8,<svg fill='%23d35400' height='14' viewBox='0 0 24 24' width='14' xmlns='http://www.w3.org/2000/svg'><path d='M7 10l5 5 5-5z'/></svg>");
            background-repeat: no-repeat;
            background-position: right 4px center;
            background-size: 14px;
        }

        .goog-te-combo:hover {
            color: #e67e22;
        }

        @keyframes pop {
            0% { transform: scale(0.8); opacity: 0; }
            100% { transform: scale(1); opacity: 1; }
        }

        #google_translate_element {
            animation: pop 0.4s ease-out;
        }

        @media (max-width: 500px) {
            #google_translate_container {
                top: 70px;
                right: 10px;
                transform: scale(0.95);
            }
        }

        /* --- STYLE FORM PESANAN --- */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f9f6f2;
            margin: 0;
            padding: 20px;
            color: #333;
            animation: fadeInBody 1s ease forwards;
        }

        @keyframes fadeInBody {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        h2 {
            text-align: center;
            color: #ff0000ff;
            margin-bottom: 30px;
            font-weight: 700;
            animation: slideDown 0.8s ease forwards;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        form {
            max-width: 450px;
            margin: 0 auto;
            background: #fff;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(211, 84, 0, 0.2);
            animation: fadeInForm 1s ease 0.5s forwards;
            opacity: 0;
        }

        @keyframes fadeInForm {
            to {
                opacity: 1;
            }
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #7f4e00;
        }

        input[type="text"],
        input[type="number"],
        input[type="time"] {
            width: 100%;
            padding: 10px 12px;
            margin-bottom: 20px;
            border: 2px solid #d35400;
            border-radius: 6px;
            font-size: 16px;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="number"]:focus,
        input[type="time"]:focus {
            border-color: #e67e22;
            outline: none;
            box-shadow: 0 0 8px rgba(230, 126, 34, 0.5);
        }

        button[type="submit"] {
            width: 100%;
            background-color: #d35400;
            color: white;
            font-size: 18px;
            padding: 12px 0;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 700;
            transition: background-color 0.3s ease, transform 0.2s ease;
            animation: fadeInButton 1s ease 1s forwards;
            opacity: 0;
        }

        button[type="submit"]:hover {
            background-color: #e67e22;
            transform: scale(1.05);
        }

        @keyframes fadeInButton {
            to {
                opacity: 1;
            }
        }
        
        
    </style>
</head>
<body>
    <!-- 🌐 Floating Google Translate -->
    <div id="google_translate_container">
        <div id="google_translate_element"></div>
    </div>

    <h2>MOHON ISI DATA UNTUK MEMPERMUDAH PROSES PICKUP</h2>

    <form action="{{ route('order.store') }}" method="POST">
        @csrf
        <label>Masukkan Nama anda :</label>
        <input type="text" name="nama_pembeli" required />

        <label>Masukkan Lokasi anda :</label>
        <input type="text" name="lokasi" required />

        <label>Waktu Pengambilan :</label>
        <input type="time" name="waktu_pengambilan" required />

        <label>Banyak Jenis/Barang (perpasang):</label>
        <input type="number" name="jumlah" required />

        <label>Masukkan Nomor WhatsApp anda :</label>
        <input type="text" name="no_wa" required />

        <button type="submit">Pesan Sekarang</button>
    </form>

    <!-- ✅ Script Google Translate -->
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'id',
                includedLanguages: 'en,id,ja,ko,zh-CN,fr,de,ar,ru',
                layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
            }, 'google_translate_element');
        }

        // 🔄 Ganti teks label sesuai bahasa yang dipilih
        document.addEventListener("DOMContentLoaded", function () {
            const observer = new MutationObserver(() => {
                const select = document.querySelector(".goog-te-combo");
                if (select && !select.dataset.listenerAdded) {
                    select.dataset.listenerAdded = "true";
                    const label = document.createElement("span");
                    label.textContent = "Pilih Bahasa";
                    label.style.fontWeight = "600";
                    label.style.color = "#d35400";
                    label.style.marginRight = "8px";
                    label.id = "translate-label";
                    select.parentNode.insertBefore(label, select);

                    select.addEventListener("change", function () {
                        const text = select.options[select.selectedIndex].text;
                        document.getElementById("translate-label").textContent =
                            "Pilihan Bahasa: " + text;
                    });
                }
            });

            observer.observe(document.body, { childList: true, subtree: true });
        });
    </script>

    <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
</html>
