
tableau = [3,25,1,6,23,56]
switch = 0;
sorted = false;

while sorted == false 
    i = 0;
    sorted = true;

       while i < tableau.length-1

        if tableau[i] < tableau[i+1]
            switch = tableau[i];
            tableau[i] = tableau[i+1];
            tableau[i+1] = switch;
            sorted = false;
    end
    i = i+1;

    end
 end
print (tableau);
