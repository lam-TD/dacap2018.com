import dashboard from './components/dashboard/Dashboard.vue';
//========= NHAN SU =========
import phongban from './components/nhansu/phongban/PhongBan.vue';
import bophan from './components/nhansu/bophan/BoPhan.vue';
import bangluong from './components/nhansu/bangluong/BangLuong.vue';
import bangthuong from './components/nhansu/bangthuong/BangThuong.vue';
import danhsachnhanvien from './components/nhansu/danhsachnhanvien/DanhSachNhanVien.vue';
import thongtinnhanvien from './components/nhansu/danhsachnhanvien/ThongTinNhanVien.vue';
export const routes = [
    {
        path: '/',
        component: dashboard
    },
    {
        path: '/dashboard',
        component: dashboard
    },
    {
        path: '/phongban',
        component: phongban
    },
    {
        path: '/bophan',
        component: bophan
    },
    {
        path: '/bangluong',
        component: bangluong
    },
    {
        path: '/bangthuong',
        component: bangthuong
    },
    {
        path: '/danhsachnhanvien',
        component: danhsachnhanvien
    },
    {
        path: '/danhsachnhanvien/themmoi',
        component: thongtinnhanvien
    }
]
