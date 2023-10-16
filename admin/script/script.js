let contacts_data;

    let contacts_s_form = document.getElementById('contacts-settings-form');

        
    function get_contacts() 
        {
            let contacts_p_id = ['address','gmaps','pn1','pn2','meta','ins','github','linkedin'];
            let iframe = document.getElementById('iframe');

            let xhr = new XMLHttpRequest();
            xhr.open("POST","ajax/setting_crud.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            xhr.onload = function(){
                contacts_data = JSON.parse(this.responseText);
                contacts_data = Object.values(contacts_data);

                for(i=0;i<contacts_p_id.length;i++){
                    document.getElementById(contacts_p_id[i]).innerText = contacts_data[i+1];
                }
                iframe.src = contacts_data[9];
                contacts_inp(contacts_data);

            }

            xhr.send('get_contacts');
        }

        function contacts_inp(data)
        {
            let contacts_inp_id =  ['address_upd','gmaps_upd','pn1_upd','pn2_upd','meta_upd','ins_upd','github_upd','linkedin_upd','iframe_upd'];

            for (i=0;i<contacts_inp_id.length;i++)
            {
                document.getElementById(contacts_inp_id[i]).value = data[i+1];
            }
        }

        contacts_s_form.addEventListener('submit', function(e){
            e.preventDefault();
            upd_contacts();
        })

        function upd_contacts()
        {
            let index = ['address','gmaps','pn1','pn2','meta','ins','github','linkedin','iframe'];
            let contacts_inp_id = ['address_upd','gmaps_upd','pn1_upd','pn2_upd','meta_upd','ins_upd','github_upd','linkedin_upd','iframe_upd'];

            let data_str="";

            for(i=0;i<index.length;i++)
            {
                data_str += index[i] + "=" + document.getElementById(contacts_inp_id[i]).value + '&';
            }
            data_str += "upd_contacts";

            let xhr = new XMLHttpRequest();
            xhr.open("POST","ajax/setting_crud.php",true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            xhr.onload = function(){

                var myModal = document.getElementById('contacts-settings')
                var modal = bootstrap.Modal.getInstance(myModal)

                modal.hide();

                if(this.responseText == 1)
                {
                    alert('success','Changes saved');
                    get_contacts();
                }
                else
                {
                    alert('error','No changes saved');
                }
            }

                xhr.send(data_str);
        }

        window.onload = function() {
            get_contacts();
        }