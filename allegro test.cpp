#include <allegro.h>
int main()
{
    BITMAP *buffer = NULL;
    int x = 0;
    int y = 0;
    const int dim = 100;
    allegro_init();
    set_color_depth(32);
    install_keyboard();
    set_gfx_mode(GFX_AUTODETECT_WINDOWED, 640, 480, 0, 0);
    buffer = create_bitmap(SCREEN_W, SCREEN_H);
    while(!key[KEY_ESC]) 
    {
        if(key[KEY_UP]) 
        {
            y--; 
        }
        if(key[KEY_DOWN]) 
        {
            y++; 
        }
        if (key[KEY_LEFT]) 
        {
            x--; 
        }
        if (key[KEY_RIGHT]) 
        {
            x++; 
        }
        clear(buffer);
        rectfill(buffer, x, y, x + dim, y + dim, makecol(255, 0, 0));
        textprintf_ex(buffer, font, 10, 10, makecol(255, 0, 0), -1, "Variavel X: %d", x);
        textprintf_ex(buffer, font, 10, 20, makecol(255, 0, 0), -1, "Variavel Y: %d", y);
        blit(buffer, screen, 0, 0, 0, 0, SCREEN_W, SCREEN_H);
        rest(10);
    }
    allegro_exit();
    return 0;
}
END_OF_MAIN();