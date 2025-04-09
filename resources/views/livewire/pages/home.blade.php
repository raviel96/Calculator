<div class="calculator" x-data="calculator">
    <div class="calculator-display">
        <input x-model="calcul" x-ref="calcul" type="text" class="calcul-field"   readonly  disabled>
        <input x-model="result" type="text" class="result-field" readonly  disabled >
    </div>
    <section class="calculator-keys">
        <div style="grid-area: empty"></div>
        <button  style="grid-area: clear" @click="addKey($el.textContent)">C</button>
        <button  style="grid-area: delete" @click="addKey($el.textContent)"><-</button>
        <button  style="grid-area: divide" @click="addKey($el.textContent)">/</button>
        <button style="grid-area: seven" @click="addKey($el.textContent)">7</button>
        <button  style="grid-area: eight" @click="addKey($el.textContent)">8</button>
        <button  style="grid-area: nine" @click="addKey($el.textContent)">9</button>
        <button  style="grid-area: multiply" @click="addKey($el.textContent)">x</button>
        <button  style="grid-area: four" @click="addKey($el.textContent)">4</button>
        <button  style="grid-area: five" @click="addKey($el.textContent)">5</button>
        <button style="grid-area: six" @click="addKey($el.textContent)">6</button>
        <button style="grid-area: subtract" @click="addKey($el.textContent)">-</button>
        <button style="grid-area: one" @click="addKey($el.textContent)">1</button>
        <button style="grid-area: two" @click="addKey($el.textContent)">2</button>
        <button style="grid-area: three" @click="addKey($el.textContent)">3</button>
        <button style="grid-area: add" @click="addKey($el.textContent)">+</button>
        <button  style="grid-area: sign" @click="addKey($el.textContent)">+/-</button>
        <button style="grid-area: zero" @click="addKey($el.textContent)">0</button>
        <button style="grid-area: dot" @click="addKey($el.textContent)">.</button>
        <button style="grid-area: equal" @click="addKey($el.textContent)">=</button>
    </section>
</div>

