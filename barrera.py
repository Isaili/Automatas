import threading
import random
import time

def task(bar, hn):
    print(f'Hilo nuevo {hn} ha iniciado')
    time.sleep(random.randint(3, 6))
    try:
        bar.wait()  
    except threading.BrokenBarrierError:
        print(f"Hilo {hn}: la barrera se ha roto")
    time.sleep(random.randint(3, 6))
    print(f'Hilo nuevo {hn} ha terminado')


bar = threading.Barrier(3)

# Crear y empezar los hilos
for i in range(10):
    hx = threading.Thread(target=task, args=(bar, i + 1))
    hx.start()

# Esperar en la barrera principal con un tiempo límite
try:
    bar.wait(timeout=3)
    print("Barrera principal ha terminado")
except threading.BrokenBarrierError:
    print("La barrera principal no logró sincronizarse a tiempo")

time.sleep(5)
bar.reset()