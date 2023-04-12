import React from 'react'
import Enzyme, { shallow,adapter } from 'enzyme'
import Adapter from 'enzyme-adapter-react-16'
import App from './App'
import { getSum } from './App'
import { render,fireEvent,screen } from '@testing-library/react'

Enzyme.configure({ adapter: new Adapter() })

describe('Kiem thu cho App component', () => {
  // Case 1
  it('kiểm tra xem hàm có trả về đúng tổng của 2 số không', () => {
    expect( getSum(1,1) ).toEqual(2);
  })
  // Case 2
  it('value-one-input có được render không', () => {
      const wrapper = shallow(<App />);
      // const valueOneInput = wrapper.find('#value-one-input');
      const valueOneInput = wrapper.find('[data-testid="value-one-input"]');
      expect( valueOneInput.length ).toEqual(1);
  })

  /*

  // Case 3: 
  Cài thư viện: npm install --save-dev @testing-library/react
  import { render,fireEvent,screen } from '@testing-library/react'


  Lay phan tu co thuoc tinh: data-testid
  https://testing-library.com/docs/queries/bytestid

  Tai lieu event:
  https://testing-library.com/docs/dom-testing-library/api-events/
  
  */

  it('Test component có hiển thị kết quả tính tổng đúng hay không', () => {
    render(<App />)
    const valueOneInput = screen.getByTestId('value-one-input');
    const valueTwoInput = screen.getByTestId('value-two-input');
    //Sử dụng fireEvent.change để gán giá trị cho hai input lần lượt là 1 và 2
    fireEvent.change(valueOneInput, { target: { value: 1 } });
    fireEvent.change(valueTwoInput, { target: { value: 2 } });
    //Sử dụng fireEvent để mock sự kiện onClick button “add”.
    const buttonAdd = screen.getByTestId('button-add');
    fireEvent.click(buttonAdd);
    
    // Lay noi dung text ben trong div result
    const text = screen.getByTestId('result').textContent;
    expect(text).toEqual('Result: 3');
  })

})
