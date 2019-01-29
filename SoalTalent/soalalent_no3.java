// Program Membuat Gambar Persegi dengan Lopping FOR dalam Bahasa C

#include <stdio.h>

int main ()
{
    int n,i,j;
    printf ("-----Program Menampilkan Persegi-----\n");
    printf ("\nInput =  "); scanf ("%d", &n);

    if ( n>2 )
    {
        for ( i=0; i<n; i++ )
        {
            for (j=0; j<n; j++)
            {
                {
                    printf ("*");
                }
            }
            printf ("\n");
        }
    }
    return 0;
}