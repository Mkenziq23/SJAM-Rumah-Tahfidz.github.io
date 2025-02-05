// route
var rProcessAddPengurus = server + "app/pengurus/add";
var rProcessDeletePengurus = server + "app/pengurus/delete";
// vue object
var appPengurus = new Vue({
    el: "#divPengurus",
    data: {},
    methods: {
        tambahPengurusAtc: function () {
            $("#divDataPengurus").hide();
            $("#divTambahPengurus").show();
            document.querySelector("#txtNamaPengurus").focus();
        },
        prosesTambahPengurusAtc: function () {
            let nama = document.querySelector("#txtNamaPengurus").value;
            let jk = document.querySelector("#txtJk").value;
            let tgl = document.querySelector("#txtTanggalLahir").value;
            let lhr = document.querySelector("#txtTempatLahir").value;
            let alamat = document.querySelector("#txtAlamat").value;
            let hp = document.querySelector("#txtHp").value;
            let email = document.querySelector("#txtEmail").value;
            let jabatan = document.querySelector("#txtJabatan").value;

            if (
                nama === "" ||
                lhr === "" ||
                alamat === "" ||
                tgl === "" ||
                hp === "" ||
                email === ""
            ) {
                pesanUmumApp(
                    "warning",
                    "Isi field !!!",
                    "Harap isi seluruh field !!!"
                );
            } else {
                let ds = {
                    nama: nama,
                    jk: jk,
                    tgl: tgl,
                    lhr: lhr,
                    alamat: alamat,
                    hp: hp,
                    email: email,
                    jabatan: jabatan,
                };
                confirmQuest(
                    "info",
                    "Konfirmasi",
                    "Tambah data pengurus ...?",
                    function (x) {
                        addConfirm(ds);
                    }
                );
            }
        },
        hapusAtc: function (idPengurus) {
            confirmQuest(
                "info",
                "Konfirmasi",
                "Hapus data pengurus ...?",
                function (x) {
                    deleteConfirm(idPengurus);
                }
            );
        },

        kembaliAtc: function () {
            load_page(rPengurus, "Pengurus");
        },
        clearForm: function () {
            document.querySelector("#txtNamaPengurus").value = "";
            document.querySelector("#txtJk").value = "";
            document.querySelector("#txtTanggalLahir").value = "";
            document.querySelector("#txtTempatLahir").value = "";
            document.querySelector("#txtAlamat").value = "";
            document.querySelector("#txtHp").value = "";
            document.querySelector("#txtEmail").value = "";
            document.querySelector("#txtJabatan").value = "";
        },
    },
});

// inisialisasi
$("#tblPengurus").dataTable();

function addConfirm(ds) {
    axios.post(rProcessAddPengurus, ds).then(function (res) {
        pesanUmumApp("success", "Sukses", "Berhasil menambahkan data pengurus");
        load_page(rPengurus, "Pengurus");
    });
}

function deleteConfirm(idPengurus) {
    let ds = { idPengurus: idPengurus };
    axios.post(rProcessDeletePengurus, ds).then(function (res) {
        pesanUmumApp("success", "Sukses", "Berhasil menghapus data pengurus");
        load_page(rPengurus, "Pengurus");
    });
}
