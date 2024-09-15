
        //Function to show the update form with pre-filled values
        function updateData(id_pengemudi, nik, nama_pengemudi, jenis_kelamin,nomor_telp, harga) {
            

            document.getElementById('id_pengemudi').value = id_pengemudi;
            document.getElementById('updatenik').value = nik;
            document.getElementById('updatenama').value = nama_pengemudi;
            //document.getElementById('updatejk').value = jenis_kelamin;
            document.getElementById('updatetelp').value = nomor_telp;
            //document.getElementById('updateharga').value = harga;

            document.getElementById('updateModal').style.display = 'block';
            
        }

        // Function to hide the update modal
        function hideModal() {
            document.getElementById('updateModal').style.display = 'none';
        }


        