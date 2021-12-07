		var list1 = [];
		var list2 = [];
		
        var n = 1;
		var x = 0;

		function AddRow(){

			var AddRown = document.getElementById('show');
			var NewRow = AddRown.insertRow(n);

			list1[x] = document.getElementById("age").value;
			list2[x] = document.getElementById("books").value;
        
            var cel1 = NewRow.insertCell(0);
			var cel2 = NewRow.insertCell(1);

			cel1.innerHTML = list1[x];
			cel2.innerHTML = list2[x];
			n++;
			x++;
		}