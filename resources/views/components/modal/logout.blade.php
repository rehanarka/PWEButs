    <div id="overlayHitam" class="fixed inset-0 bg-black/50 z-50 flex items-center justify-center hidden opacity-0 transition-opacity duration-300">
        <div id="modalLogout" class="bg-white rounded-lg p-6 w-92 border border-slate-100 shadow-md">
            <h1 class="font-black tracking-[0.15em] text-red-600">PERINGATAN!</h1>
            <p class="text-lg mt-2">Apakah Anda Yakin Ingin Logout Dari Sistem ArkaCafe?</p>
            <div class="flex justify-end gap-5 mt-2">
                <button id="cancelButton" class="px-4 py-1 bg-slate-200 rounded-md w-20 hover:cursor-pointer hover:-translate-y-1 transition duration-300 hover:bg-slate-300 font-semibold border border-white ">Batal</button>
                <form action="/logout" method="post">
                    @csrf
                    <button class="px-4 py-1 bg-red-200 rounded-md w-20 hover:cursor-pointer hover:-translate-y-1 transition duration-300 hover:bg-red-300 font-semibold border border-red-300 shadow-md">Logout</button>
                </form>
            </div>
        </div>
    </div>
