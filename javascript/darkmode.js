document.addEventListener('DOMContentLoaded', function () {
    const button = document.getElementById('dark-mode');

    if (!button) {
        return;
    }

    // 从 localStorage 恢复夜间模式
    const enabled = localStorage.getItem('darkMode') === 'true';

    if (enabled) {
        document.documentElement.classList.add('dark-mode');
    }

    // 设置按钮文字
    button.textContent = enabled ? '日间模式' : '夜间模式';

    // 点击按钮切换模式
    button.addEventListener('click', function () {
        document.documentElement.classList.toggle('dark-mode');

        const enabled = document.documentElement.classList.contains('dark-mode');

        // 保存当前状态
        localStorage.setItem('darkMode', enabled);

        // 更新按钮文字
        button.textContent = enabled ? '日间模式' : '夜间模式';
    });
});
