@extends('welcome ')

@section('title', 'Profile')

@section('content')
    <!-- Hero Section -->
    <section class="relative">
        <img
            class="w-full h-90 object-cover"
            src="{{ asset('img/profil1.jpg') }}"
            alt="Hero Image"
        />
        <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50">
            <h2 class="text-4xl text-yellow-200 font-bold text-center">PONDOK PESANTREN TARBIYATUS SHOLIHIN</h2>
        </div>
    </section>

    <!-- About Section -->
    <section class="my-8 p-6 bg-green-600 rounded-lg">
        <div class="flex flex-col lg:flex-row items-center">
            <div class="lg:w-1/2 space-y-4 text-justify">
                <h2 class="text-3xl text-white font-bold">Tentang Kami</h2>
                <p class="text-white">
                    Pondok Pesantren Tarbiyatus Sholihin adalah lembaga pendidikan Islam yang berkomitmen mencetak generasi muda yang beriman, bertakwa, dan berakhlak mulia. Berdiri dengan tujuan mencetak santri yang unggul dalam pemahaman agama dan mampu memberikan kontribusi positif kepada masyarakat, pesantren ini mengintegrasikan nilai-nilai keislaman dengan pendidikan modern.
                </p>
                <p class="text-white">
                    Di Pondok Pesantren Tarbiyatus Sholihin, pendidikan agama menjadi prioritas utama. Santri dididik mendalami Al-Qur'an, hadits, dan kitab-kitab klasik warisan ulama salaf. Kurikulum pesantren juga memadukan pembelajaran ilmu pengetahuan umum untuk mempersiapkan santri menghadapi tantangan zaman. Program tahfidz Al-Qur'an, kajian tafsir, fikih, dan akhlak menjadi bagian penting yang diimplementasikan untuk memperkuat pemahaman dan pengamalan ilmu agama dalam kehidupan sehari-hari.
                </p>
                <p class="text-white">
                    Selain pendidikan agama, pesantren ini juga berkomitmen mengembangkan potensi santri dalam bidang keterampilan dan kewirausahaan. Melalui berbagai program pelatihan dan kegiatan kreatif, santri dibimbing menjadi individu yang mandiri dan produktif. Pesantren menyediakan fasilitas pendukung seperti perpustakaan, ruang belajar yang nyaman, asrama, dan area kegiatan luar ruangan, menciptakan lingkungan belajar yang kondusif dan holistik.
                </p>
                <p class="text-white">
                    Dengan dukungan tenaga pengajar yang kompeten dan berpengalaman, pendekatan pembelajaran di pesantren ini mengedepankan kasih sayang dan disiplin. Hubungan antara guru (ustadz) dan santri dibangun atas dasar rasa hormat, menciptakan iklim belajar yang harmonis dan menyenangkan. Pesantren juga aktif dalam kegiatan keagamaan dan sosial di masyarakat, seperti pengajian umum, bakti sosial, dan penyelenggaraan acara keagamaan.
                </p>
                <p class="text-white">
                    Kami percaya bahwa pendidikan adalah kunci untuk mencetak generasi penerus yang cerdas secara intelektual, kuat secara spiritual, dan tangguh secara emosional. Dengan visi menjadi pesantren unggul yang berorientasi pada pembentukan insan kamil, Pondok Pesantren Tarbiyatus Sholihin berkomitmen memberikan manfaat bagi umat, bangsa, dan agama.
                </p>
                <h3 class="text-2xl text-white font-semibold">Program Unggulan</h3>
                <ul class="list-disc list-inside text-white">
                    <li>Pendidikan Agama Islam</li>
                    <li>Pendidikan Formal</li>
                    <li>Kegiatan Ekstrakurikuler</li>
                    
                </ul>
            </div>
        </div>
    </section>
@endsection
