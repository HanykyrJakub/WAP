var canvas = document.querySelector("canvas");
 
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
 
            var l = canvas.getContext('2d');
 
            var x = Math.floor(Math.random() * innerWidth);
            var y = Math.floor(Math.random() * innerHeight);
            var vx = Math.floor(Math.random() * 2);
            var vy = Math.floor(Math.random() * 4);
            var radius = 20;
 
            move();

            function move() {
                requestAnimationFrame(move);
 

                l.clearRect(0, 0, innerWidth, innerHeight);
                l.beginPath();
                l.strokeStyle = "black";
                l.arc(x, y, radius, 0, Math.PI * 2, false);
                l.stroke();
 

                if (radius + x > innerWidth)
                    vx = 0 - vx;
 
                if (x - radius < 0)
                    vx = 0 - vx;
 
                if (y + radius > innerHeight)
                    vy = 0 - vy;
 
                if (y - radius < 0)
                    vy = 0 - vy;
 
                x = x + vx;
                y = y + vy;
 
            }